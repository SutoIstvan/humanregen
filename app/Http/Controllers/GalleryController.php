<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function gallerydashboard()
    {
        $galleries = Gallery::all();
        return view('dashboard.gallery', compact('galleries'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Загрузка изображения
        $imagePath = $request->file('image')->store('galleries', 'public');

        // Сохранение в базу данных
        Gallery::create([
            'image_path' => $imagePath,
        ]);

        return redirect()->route('gallery.dashboard')->with('success', 'Изображение добавлено!');
    }

    public function upload(Request $request)
    {
        //  dd($request->all());
        // Валидация файлов
        $request->validate([
            // 'images' => 'required|array|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Максимальный размер 2MB
        ]);

        // Массив для хранения путей к загруженным файлам
        $uploadedFiles = [];

        // Обрабатываем каждый файл
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                // Загружаем файл в папку 'images' и получаем путь
                $imagePath = $file->store('images', 'public');
        
                // Создаем запись в таблице gallery
                Gallery::create([
                    'image_path' => $imagePath,
                ]);
            }
        }

        // Вы можете сохранить пути файлов в базе данных, если нужно

        // Вернуть успешный ответ
        return back()->with('success', 'Files uploaded successfully!');
    }

    public function delete($id)
    {
        // Находим галерею по ID
        $gallery = Gallery::findOrFail($id);
    
        // Удаляем изображение из хранилища
        Storage::disk('public')->delete($gallery->image_path);
    
        // Удаляем запись из базы данных
        $gallery->delete();
    
        // Перенаправляем на предыдущую страницу с сообщением об успешном удалении
        return redirect()->back()->with('success', 'Image deleted successfully');
    }

}
