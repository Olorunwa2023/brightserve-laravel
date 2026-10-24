<?php

use App\Http\Controllers\BookingController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/request', function () {
    $services = Service::where('active', true)
        ->orderBy('name')
        ->get(['id', 'name']);

    return view('bookings.create', compact('services'));
})->name('request.create');

Route::post('/request', [BookingController::class, 'store'])
    ->name('request.store');