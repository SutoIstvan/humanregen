<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->name('welcome');

Route::get('/effects', function () {
    return view('effects');
})->name('effects');

Route::get('/price', function () {
    return view('price');
})->name('price');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');


Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
});


Route::get('/bookings/disabled-times', [BookingController::class, 'getDisabledTimes']);

Route::get('/saveappointments', [BookingController::class, 'saveappointments'])->name('saveappointments');

Route::post('/bookings', [BookingController::class, 'store'])->name('bookstore');

Route::delete('/bookings/{id}', [BookingController::class, 'destroy']);

Route::post('/bookings/update-status/{id}', [BookingController::class, 'updateStatus'])->name('bookings.update-status');

Route::get('/get-client-bookings/{email}', [BookingController::class, 'getClientBookings']);


