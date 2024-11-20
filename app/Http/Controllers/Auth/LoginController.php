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
    
        // Проверяем, существует ли пользователь с таким email
        $userExists = \App\Models\User::where('email', $credentials['email'])->exists();
    
        if ($userExists) {
            // Если пользователь существует, проверяем пароль
            if (Auth::attempt($credentials)) {
                if ($request->filled('redirect')) {
                    return redirect()->to($request->input('redirect'));
                }
    
                return redirect()->route('dashboard');
            }
    
            // Неверный пароль
            return redirect()->back()->withErrors(['password' => 'Érvénytelen jelszó.']);
        }
    
        // Неверный email
        return redirect()->back()->withErrors(['email' => 'Hibás vagy nem létező email-cím.']);
    }
    

    
}
