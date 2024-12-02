<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscribeemail(Request $request)
    {
        $request->validate([
            'subscribeemail' => 'required|email|unique:subscriptions,email',
        ]);

        Subscription::create([
            'email' => $request->input('subscribeemail'),
        ]);

        return redirect()->back()->with('modalsuccess', 'Sikeresen feliratkozott a hírlevélre.');
    }

    public function subscribe(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        Subscription::create([
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('modalsuccess', 'Sikeresen feliratkozott a hírlevélre.');
    }

    public function unsubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:subscriptions,email',
        ]);

        Subscription::where('email', $request->input('email'))->delete();

        return redirect()->back()->with('success', 'Sikeresen leiratkozott a hírlevélről.');
    }

    public function unsubscribeemail($email)
    {
        $subscription = Subscription::where('email', $email)->first();
        
        if ($subscription) {
            $subscription->delete();
            return redirect()->route('message')->with('message', 'Sikeresen leiratkozott a hírlevélről.');
        }

        return redirect()->route('message')->with('message', 'Ez az email nem található az adatbázisunkban.');
    }

}
