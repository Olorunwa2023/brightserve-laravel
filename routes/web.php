<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/request', function () {
    $services = Service::where('active', true)
        ->orderBy('name')
        ->get(['id', 'name']);

    return view('bookings.create', compact('services'));
})->name('request.create');