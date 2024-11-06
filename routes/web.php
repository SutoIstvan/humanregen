<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/references', function () {
    return view('references');
})->name('references');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::prefix('services')->group(function () {
    Route::get('/access-control-systems', function () {
        return view('services.access_control_systems');
    })->name('services.access_control_systems');

    Route::get('/surveillance-systems', function () {
        return view('services.surveillance_systems');
    })->name('services.surveillance_systems');

    Route::get('/server-maintenance', function () {
        return view('services.server_maintenance');
    })->name('services.server_maintenance');

    Route::get('/network-infrastructure', function () {
        return view('services.network_infrastructure');
    })->name('services.network_infrastructure');

    Route::get('/computer-services', function () {
        return view('services.computer_services');
    })->name('services.computer_services');

    Route::get('/web-development', function () {
        return view('services.web_development');
    })->name('services.web_development');    
});

Route::get('change-language/{locale}', function ($locale) {
    if (in_array($locale, ['hu', 'ru'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('changeLanguage');
