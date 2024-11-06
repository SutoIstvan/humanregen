<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // dd($validated);

        // Создаем текстовое сообщение
        $message = "Новое сообщение от: {$validated['name']}\n";
        $message .= "Email: {$validated['email']}\n\n";
        $message .= "Сообщение:\n{$validated['message']}";

        // Логика для отправки письма или сохранения данных

        Mail::send('emails.contact', ['data' => $validated], function ($message) use ($validated) {
            $message->to('info@pikft.hu')
                    ->subject('Ajánlatkérés');
            $message->from($validated['email'], $validated['name']);
        });

        return redirect()->back()->with('success', 'Ваше сообщение успешно отправлено!');
    }
}
