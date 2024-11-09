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
        return [
            'title' => 'Foglalás', // или что-то, что вы хотите показывать
            'start' => $booking->date . 'T' . $booking->time_slot, // Формат даты и времени: YYYY-MM-DDTHH:MM
            'end' => date('Y-m-d\TH:i', strtotime($booking->date . ' ' . $booking->time_slot . ' + ' . $booking->duration . ' minutes')), // вычисляем end
            'extendedProps' => [
                'client_name' => $booking->client_name,
                'client_email' => $booking->client_email,
                'client_phone' => $booking->client_phone,
                'id' => $booking->id,
            ]
        ];
    });

    return view('dashboard.index', ['bookings' => $bookings]);
}
}
