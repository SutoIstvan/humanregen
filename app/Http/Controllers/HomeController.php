<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

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
        return view('home');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function dashboard()
    // {
    //     $bookings = Booking::all();

    //     return view('dashboard.index', compact('bookings'));
    // }

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
}
