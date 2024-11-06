<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Проверяем, авторизован ли пользователь и имеет ли он роль "admin"
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Разрешаем доступ, если роль admin
        }

        // Если не admin, перенаправляем на главную страницу или страницу с ошибкой
        return redirect('/home'); // Можно изменить на любую другую страницу, например, /home
    }
}

