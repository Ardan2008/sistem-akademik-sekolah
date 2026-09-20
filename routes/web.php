<?php

use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('landing.index');
})->name('beranda');

// Login 
Route::get('/login', function () {
    return view('layouts.auth.login');
})->name('login');