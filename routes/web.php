<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| MP04 — Responsive Product Landing Page (Isla Grounds Club)
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');
