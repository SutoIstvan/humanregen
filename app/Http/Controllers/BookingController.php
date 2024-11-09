<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Price;
use Carbon\Carbon;

class BookingController extends Controller
{
// В контроллере или маршруте
public function getDisabledTimes(Request $request)
{
    // Получаем дату из запроса
    $date = $request->query('date');

    // Получаем все бронирования на указанную дату
    $bookings = Booking::where('date', $date)->get();

    // Преобразуем их в массив с занятыми временными интервалами
    $disabledTimes = [];
    foreach ($bookings as $booking) {
        $startTime = new \DateTime("{$booking->date} {$booking->time_slot}");
        $duration = $booking->duration; // Получаем длительность
        $endTime = clone $startTime;
        $endTime->modify("+{$duration} minutes"); // Увеличиваем время окончания на продолжительность

        // Перебираем все временные слоты, которые блокируются
        while ($startTime < $endTime) {
            $disabledTimes[] = $startTime->format('H:i'); // Добавляем занятый интервал в массив
            $startTime->modify("+35 minutes"); // Переходим к следующему слоту (каждые 35 минут)
        }
    }

    // Возвращаем заблокированные времена как JSON
    return response()->json($disabledTimes);
}


public function saveappointments(Request $request)
{
    $request->validate([
        'selected_time' => 'required|string',  // Проверка, что время выбрано
        'selected_date' => 'required|date',    // Проверка, что дата правильная
    ], [
        'selected_time.required' => 'Kérem, válasszon időpontot.',  // Сообщение об ошибке для времени
        'selected_date.required' => 'Kérem, válasszon dátumot.',    // Сообщение об ошибке для даты
        'selected_date.date' => 'Érvénytelen dátum formátum.',        // Сообщение об ошибке для формата даты
    ]);

    // Получаем данные времени из запроса
    $selectedTime = $request->input('selected_time');
    $selectedDate = $request->input('selected_date');
    $duration = $request->input('durationinput');
    $user = auth()->user();
    $price = Price::find(1);
    $price2 = Price::find(2);

    return view('saveappointments', compact('selectedDate', 'selectedTime', 'user', 'price', 'price2', 'duration'));

    // Сохраняем только время в базу данных
    // Booking::create([
    //     'time_slot' => $selectedTime,
    //     'date' => $selectedDate,
    //     'duration' => 35, // Примерная длительность
    //     'client_name' => 'Тестовый клиент',
    //     'client_email' => 'test@example.com',
    //     'client_phone' => '1234567890',
    // ]);

    // return redirect()->back()->with('success', 'Foglalás sikeresen elmentve.');
    // $selectedDate = $request->input('selected_date');
    // $selectedTime = $request->input('selected_time');

    // return view('saveappointments', compact('selectedDate', 'selectedTime'));
}


public function store(Request $request)
{
    $validatedData = $request->validate([
        'date' => 'required|date',
        'time_slot' => 'required|date_format:H:i',
        'duration' => 'required|integer|in:35,70',
        'client_name' => 'required|string|max:255',
        'client_email' => 'required|email|max:255',
        'client_phone' => 'required|string|max:20',
    ]);

    // Преобразуем выбранную дату и время в объект Carbon
    $startTime = Carbon::parse($validatedData['date'] . ' ' . $validatedData['time_slot']);
    $endTime = $startTime->copy()->addMinutes($validatedData['duration']); // Время окончания (добавляем длительность)

    // Проверка 1: Проверка на занятость времени
    $existingBooking = Booking::where('date', $validatedData['date'])
        ->where('time_slot', $validatedData['time_slot'])
        ->first();

    if ($existingBooking) {
        // Если время занято, выводим ошибку
        return redirect()->route('appointments')
            ->withErrors(['time_slot' => 'Ez az időpont már foglalt. Kérem válasszon másik időpontot.']);
    }

    // Проверка 2: Проверка на слишком длинное время
    $latestPossibleTime = Carbon::parse($validatedData['date'] . ' 18:00'); // Максимальное время для бронирования - 18:00
    if ($endTime->gt($latestPossibleTime)) {
        // Если время окончания больше 18:00, то это недопустимо
        return redirect()->route('appointments')
            ->withErrors(['time_slot' => 'A választott időpont túl későn van. Kérem válasszon egy másik időpontot.']);
    }

    // Проверка 3: Проверка на пересечение с другим бронированием
    // Мы будем отнимать 1 минуту от длительности, чтобы избежать возможных погрешностей
    $endTimeAdjusted = $endTime->subMinute();  // Отнимаем 1 минуту от времени окончания

    $overlappingBooking = Booking::where('date', $validatedData['date'])
        ->where(function($query) use ($startTime, $endTimeAdjusted) {
            // Проверяем, есть ли записи, которые начинаются до конца нового интервала и заканчиваются после его начала
            $query->whereBetween('time_slot', [$startTime, $endTimeAdjusted])
                ->orWhere(function($query) use ($startTime, $endTimeAdjusted) {
                    // Или если бронирование начинается до вашего интервала, но заканчивается после
                    $query->where('time_slot', '<', $startTime)
                        ->whereRaw('DATE_ADD(time_slot, INTERVAL duration MINUTE) > ?', [$endTimeAdjusted]);
                });
        })
        ->exists();

    if ($overlappingBooking) {
        // Если существует пересечение с другим бронированием, выводим ошибку
        return redirect()->route('appointments')
            ->withErrors(['time_slot' => 'Ez az időpont átfedésben van egy másik foglalással. Kérem válasszon egy másik időpontot.']);
    }

    // Создаем новое бронирование, если все проверки прошли успешно
    Booking::create($validatedData);

    return redirect()->route('appointments');
}


public function destroy($id)
{
    $booking = Booking::find($id);
    
    if ($booking) {
        $booking->delete();
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 400);
}


}
