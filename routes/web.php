<?php

use App\Http\Controllers\BookingController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

// Homepage: display active services from the database.
Route::get('/', function () {
    $services = Service::where('active', true)
        ->orderBy('name')
        ->get(['id', 'name', 'description']);

    return view('home', compact('services'));
})->name('home');

// Request form: load active services into the dropdown.
Route::get('/request', function () {
    $services = Service::where('active', true)
        ->orderBy('name')
        ->get(['id', 'name']);

    return view('bookings.create', compact('services'));
})->name('request.create');

// Process submitted service requests.
Route::post('/request', [BookingController::class, 'store'])
    ->name('request.store');