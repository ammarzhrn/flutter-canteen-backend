<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/home', '/');

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');
