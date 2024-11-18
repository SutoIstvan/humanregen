<?php

namespace App\Http\Controllers;

use App\Mail\AdminBookingNotificationMail;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Price;
use Carbon\Carbon;
use App\Mail\BookingConfirmationMail;
use App\Mail\NewBookingNotification;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{

    /**
     * Получаем все бронирования на указанную дату.
     */    public function getDisabledTimes(Request $request)
    {
        $date = $request->query('date');

        $bookings = Booking::where('date', $date)->get();

        // Преобразуем их в массив с занятыми временными интервалами
        $disabledTimes = [];
        foreach ($bookings as $booking) {
            $startTime = new \DateTime("{$booking->date} {$booking->time_slot}");
            $duration = $booking->duration;
            $endTime = clone $startTime;
            $endTime->modify("+{$duration} minutes"); // Увеличиваем время окончания на продолжительность

            // Перебираем все временные слоты, которые блокируются
            while ($startTime < $endTime) {
                $disabledTimes[] = $startTime->format('H:i'); // Добавляем занятый интервал в массив
                $startTime->modify("+35 minutes"); // Переходим к следующему слоту (каждые 35 минут)
            }
        }

        return response()->json($disabledTimes);
    }

    /**
     * Сохраняем бронирования клиента.
     */
    public function saveappointments(Request $request)
    {
        $request->validate([
            'selected_time' => 'required|string',
            'selected_date' => 'required|date',
        ], [
            'selected_time.required' => 'Kérem, válasszon időpontot.',
            'selected_date.required' => 'Kérem, válasszon dátumot.',
            'selected_date.date' => 'Érvénytelen dátum formátum.',
        ]);

        // Получаем данные времени из запроса
        $selectedTime = $request->input('selected_time');
        $selectedDate = $request->input('selected_date');
        $duration = $request->input('durationinput');
        $user = auth()->user();
        $price = Price::find(1);
        $price2 = Price::find(2);

        return view('saveappointments', compact('selectedDate', 'selectedTime', 'user', 'price', 'price2', 'duration'));
    }

    /**
     * Сохраняем бронирования клиента.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'time_slot' => 'required|date_format:H:i',
            'duration' => 'required|integer|in:35,70',
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:20',
            // 'client_phone' => ['required', 'string', 'max:20', 'regex:/^\+?[0-9]+$/'],

        ]);

        // Преобразуем выбранную дату и время в объект Carbon
        $startTime = Carbon::parse($validatedData['date'] . ' ' . $validatedData['time_slot']);
        $endTime = $startTime->copy()->addMinutes($validatedData['duration']); // Время окончания (добавляем длительность)

        // Проверка на занятость времени
        $existingBooking = Booking::where('date', $validatedData['date'])
            ->where('time_slot', $validatedData['time_slot'])
            ->first();

        if ($existingBooking) {
            // Если время занято, выводим ошибку
            return redirect()->route('appointments')
                ->withErrors(['time_slot' => 'Ez az időpont már foglalt. Kérem válasszon másik időpontot.']);
        }

        // Проверка на слишком длинное время
        $latestPossibleTime = Carbon::parse($validatedData['date'] . ' 18:00'); // Максимальное время для бронирования - 18:00
        if ($endTime->gt($latestPossibleTime)) {
            // Если время окончания больше 18:00, то это недопустимо
            return redirect()->route('appointments')
                ->withErrors(['time_slot' => 'A választott időpont túl későn van. Kérem válasszon egy másik időpontot.']);
        }

        // Проверка на пересечение с другим бронированием
        $endTimeAdjusted = $endTime->subMinute();  // Отнимаем 1 минуту от времени окончания

        $overlappingBooking = Booking::where('date', $validatedData['date'])
            ->where(function ($query) use ($startTime, $endTimeAdjusted) {
                // Проверяем, есть ли записи, которые начинаются до конца нового интервала и заканчиваются после его начала
                $query->whereBetween('time_slot', [$startTime, $endTimeAdjusted])
                    ->orWhere(function ($query) use ($startTime, $endTimeAdjusted) {
                        // Или если бронирование начинается до вашего интервала, но заканчивается после
                        $query->where('time_slot', '<', $startTime)
                            ->whereRaw('DATE_ADD(time_slot, INTERVAL duration MINUTE) > ?', [$endTimeAdjusted]);
                    });
            })
            ->exists();

        if ($overlappingBooking) {
            return redirect()->route('appointments')
                ->withErrors(['time_slot' => 'Ez az időpont átfedésben van egy másik foglalással. Kérem válasszon egy másik időpontot.']);
        }



        Booking::create($validatedData);



        $bookingDetails = [
            'name' => $validatedData['client_name'],
            'date' => $validatedData['date'],
            'time' => $validatedData['time_slot'],
            'service' => $validatedData['duration'],
            'client_email' => $validatedData['client_email'],
            'client_phone' => $validatedData['client_phone'],
        ];
                
        Mail::to('info@humanregen.hu')->send(new NewBookingNotification($bookingDetails));

        // Mail::to('info@humanregen.hu')->send(new AdminBookingNotificationMail($bookingDetails));

        // $validatedData = $request->validate([
        //     'date' => 'required|date',
        //     'time_slot' => 'required|date_format:H:i',
        //     'duration' => 'required|integer|in:35,70',
        //     'client_name' => 'required|string|max:255',
        //     'client_email' => 'required|email|max:255',
        //     'client_phone' => 'required|string|max:20',
        // ]);

        $name = $validatedData['client_name'];
        $mail = $validatedData['client_email'];
        $duration = $validatedData['duration'];
        $date = $validatedData['date'];
        $time = $validatedData['time_slot'];

        return redirect()->route('message')->with(
            'message', "
                Tisztelt {$name}!
                A {$duration} perces foglalását sikeresen rögzítettük {$date} napra, {$time} időpontra. 
                A megadott {$mail} email címre küldünk megerősítést, amikor feldolgoztuk az adatokat.
                Köszönjük a foglalást, a Human Regen csapata!
            "
        );

        // return redirect()->route('appointments');
    }


    /**
     * Удаление бронирования клиента.
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 400);
    }

    public function destroyprofile($id)
    {
        $booking = Booking::find($id);

        $booking->delete();

        return redirect()->back()->with('success', 'Sikeresen törölve.');
    }

    /**
     * Обновление статуса бронирования клиента.
     */
    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = $request->input('status');
        $booking->save();

        $bookingDetails = [
            'name' => $booking['client_name'],
            'date' => $booking['date'],
            'time' => $booking['time_slot'],
            'service' => $booking['duration'],
        ];
        
        Mail::to($booking['client_email'])->send(new BookingConfirmationMail($bookingDetails));


        return response()->json(['success' => true]);
    }

    /**
     * Получаем все бронирования клиента по email.
     */
    public function getClientBookings($email)
    {
        try {
            $today = \Carbon\Carbon::today();

            $bookings = Booking::where('client_email', $email)
                ->where('date', '>=', $today->toDateString())  // Фильтрация по дате
                ->get();

            $formattedBookings = $bookings->map(function ($booking) {
                $startDateTime = \Carbon\Carbon::parse($booking->date . ' ' . $booking->time_slot);
                $endDateTime = $startDateTime->copy()->addMinutes($booking->duration);

                return [
                    'bookingDate' => $startDateTime->format('Y-m-d'),
                    'startTime' => $startDateTime->format('H:i'),
                    'endTime' => $endDateTime->format('H:i'),
                    'duration' => $booking->duration
                ];
            });

            return response()->json($formattedBookings);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to load bookings'], 500);
        }
    }
}
