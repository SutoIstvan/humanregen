<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Получение email текущего аутентифицированного пользователя
        $userEmail = Auth::user()->email;

        // Получение всех бронирований пользователя по его email
        $bookings = Booking::where('client_email', $userEmail)->get();

        $user = Auth::user();

        $subscribe = Subscription::where('email', $userEmail)->exists();

        return view('home', compact('bookings', 'user', 'subscribe'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashboard()
    {
        $bookings = Booking::all()->map(function ($booking) {

            $color = match ($booking->status) {
                'new' => '#007bff', // Синий для новых
                'confirmed' => '#28a745', // Зеленый для подтвержденных
                'canceled' => '#dc3545', // Красный для отмененных
                default => '#6c757d', // Серый для других статусов
            };

            $startDateTime = $booking->date . ' ' . $booking->time_slot;
            $endDateTime = date('Y-m-d\TH:i', strtotime($startDateTime . ' + ' . $booking->duration . ' minutes'));

            $formattedDate = date('Y-m-d', strtotime($startDateTime));
            $formattedTimeStart = date('H:i', strtotime($startDateTime));
            $formattedTimeEnd = date('H:i', strtotime($endDateTime));

            return [
                'title' => 'Foglalás', // или что-то, что вы хотите показывать
                'color' => $color, // Добавляем цвет события
                'start' => $booking->date . 'T' . $booking->time_slot, // Формат даты и времени: YYYY-MM-DDTHH:MM
                'end' => date('Y-m-d\TH:i', strtotime($booking->date . ' ' . $booking->time_slot . ' + ' . $booking->duration . ' minutes')), // вычисляем end
                'extendedProps' => [
                    'client_name' => $booking->client_name,
                    'client_email' => $booking->client_email,
                    'client_phone' => $booking->client_phone,
                    'duration' => $booking->duration,
                    'formatted_date' => $formattedDate,
                    'formatted_time_start' => $formattedTimeStart,
                    'formatted_time_end' => $formattedTimeEnd,
                    'id' => $booking->id,
                ]
            ];
        });

        return view('dashboard.index', ['bookings' => $bookings]);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        Subscription::create([
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('success', 'Sikeresen feliratkozott a hírlevélre.');
    }

    public function unsubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:subscriptions,email',
        ]);

        Subscription::where('email', $request->input('email'))->delete();

        return redirect()->back()->with('success', 'Sikeresen leiratkozott a hírlevélről.');
    }
}
