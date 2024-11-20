<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Проверяем и используем параметр 'redirect'
        if ($request->filled('redirect')) {
            return redirect()->to($request->input('redirect')); // Исправлено: добавлен метод `to()`
        }

        // Перенаправление на маршрут по умолчанию
        return redirect()->route('dashboard');
    }

    return redirect()->back()->withErrors(['email' => 'Érvénytelen bejelentkezési adatok.']);
}

    
}
