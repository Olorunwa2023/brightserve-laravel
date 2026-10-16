<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/request', function () {
    return view('bookings.create');
})->name('request.create');