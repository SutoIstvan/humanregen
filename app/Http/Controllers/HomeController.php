<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
        $userEmail = Auth::user()->email;

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
                'new' => '#007bff',
                'confirmed' => '#28a745',
                'canceled' => '#dc3545',
                default => '#6c757d',
            };

            $startDateTime = $booking->date . ' ' . $booking->time_slot;
            $endDateTime = date('Y-m-d\TH:i', strtotime($startDateTime . ' + ' . $booking->duration . ' minutes'));

            $formattedDate = date('Y-m-d', strtotime($startDateTime));
            $formattedTimeStart = date('H:i', strtotime($startDateTime));
            $formattedTimeEnd = date('H:i', strtotime($endDateTime));

            $title = $booking->status === 'new' ? 'Új foglalás' : 'Megerősítve';

            return [
                'title' => $title,
                'color' => $color,
                'start' => $booking->date . 'T' . $booking->time_slot,
                'end' => date('Y-m-d\TH:i', strtotime($booking->date . ' ' . $booking->time_slot . ' + ' . $booking->duration . ' minutes')),
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

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
        ]);

        $id = Auth::user()->id;
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->back()->with('success', 'Adataid sikeresen frissítve.');
    }

    public function users(Request $request)
    {
        $users = User::paginate(15);

        return view('dashboard.users', compact('users'));
    }

    public function usercreate()
    {
        return view('dashboard.usercreate');
    }

    public function userstore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => "admin",
        ]);

        return redirect()->route('users.create')->with('success', 'Az adminisztrátor sikeresen hozzáadva');
    }


    public function userdelete(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();

            return redirect()->route('users')->with('success', 'A felhasználó sikeresen törölve lett');
        }

        return redirect()->route('users')->with('error', 'A felhasználó nem található');
    }

    public function useredit($id)
    {
        $user = User::findOrFail($id);

        return view('dashboard.useredit', compact('user'));
    }
    public function userupdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'role' => 'required',
        ]);
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'role' => $request->input('role'),
        ]);

        return redirect()->route('users')->with('success', 'Пользователь успешно обновлен');
    }

}

