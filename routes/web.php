<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SubscribeController;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/effects', function () {
    return view('effects');
})->name('effects');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/gallery', function () {
    $images = Gallery::all();

    return view('gallery', compact('images'));
})->name('gallery');

Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');

Route::get('/message', function () {
    return view('message');
})->name('message');

Route::get('/gdpr', function () {
    return view('gdpr');
})->name('gdpr');

Auth::routes();

Route::get('/price', [PriceController::class, 'index'])->name('price');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/profile/update', [HomeController::class, 'update'])->name('profile.update');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/users', [HomeController::class, 'users'])->name('users');
    Route::get('/dashboard/prices/edit', [PriceController::class, 'edit'])->name('price.edit');
    Route::put('/dashboard/prices/update-all', [PriceController::class, 'updateAllPrices'])->name('prices.updateAll');
    Route::post('/save-calendar-view', [HomeController::class, 'saveCalendarView'])->name('save.calendar.view');

    Route::get('/dashboard/users/create', [HomeController::class, 'usercreate'])->name('users.create');
    Route::get('/dashboard/users/edit/{id}', [HomeController::class, 'useredit'])->name('users.edit');
    Route::post('/dashboard/users', [HomeController::class, 'userstore'])->name('users.store');
    Route::put('/users/update/{id}', [HomeController::class, 'userupdate'])->name('users.update');
    Route::delete('users/{id}', [HomeController::class, 'userdelete'])->name('users.delete');

    Route::post('/dashboard/block-time', [BookingController::class, 'blockTime'])->name('block-time');
    Route::delete('/block-day', [BookingController::class, 'blockDay'])->name('block-day');

    Route::post('/block-day-time', [BookingController::class, 'blockDayTime'])->name('block-day-time');

    Route::get('/dashboard/gallery', [GalleryController::class, 'gallerydashboard'])->name('gallery.dashboard');
    Route::post('/dashboard/gallery', [GalleryController::class, 'store'])->name('gallery.store');
    Route::delete('/dashboard/gallery/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');
    Route::post('/dashboard/gallery/upload', [GalleryController::class, 'upload'])->name('gallery.upload');

});

Route::get('/bookings/disabled-times', [BookingController::class, 'getDisabledTimes']);
Route::get('/get-client-bookings/{email}', [BookingController::class, 'getClientBookings']);
Route::get('/saveappointments', [BookingController::class, 'saveappointments'])->name('saveappointments');
Route::post('/bookings/update-status/{id}', [BookingController::class, 'updateStatus'])->name('bookings.update-status');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookstore');
Route::post('/dashboard/bookings', [BookingController::class, 'dashboardbookstore']);

Route::delete('/bookings/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');
Route::delete('/booking/{id}', [BookingController::class, 'destroyprofile'])->name('bookings.destroyprofile');

Route::post('/subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe');
Route::post('/subscribeemail', [SubscribeController::class, 'subscribeemail'])->name('subscribeemail');
Route::post('/unsubscribe', [SubscribeController::class, 'unsubscribe'])->name('unsubscribe');
Route::get('/unsubscribe/{email}', [SubscribeController::class, 'unsubscribeemail'])->name('unsubscribeemail');



Route::prefix('about')->group(function () {
    Route::get('/mission', function () {
        return view('about.mission');
    })->name('about.mission');

    Route::get('/credo', function () {
        return view('about.credo');
    })->name('about.credo');

    Route::get('/cap', function () {
        return view('about.cap');
    })->name('about.cap');

    Route::get('/introduction', function () {
        return view('about.introduction');
    })->name('about.introduction');

    Route::get('/using-plasma-cancer', function () {
        return view('about.using-plasma-cancer');
    })->name('about.using-plasma-cancer');

    Route::get('/how-human-regeneration-works', function () {
        return view('about.how-human-regeneration-works');
    })->name('about.how-human-regeneration-works');

    Route::get('/regeneration-process', function () {
        return view('about.regeneration-process');
    })->name('about.regeneration-process');

    Route::get('/when-not-usable', function () {
        return view('about.when-not-usable');
    })->name('about.when-not-usable');
});
