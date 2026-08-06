<?php

use Illuminate\Support\Facades\Route;

// Halaman Landing Page
Route::get('/', function () {
    return view('landing.beranda');
})->name('beranda');
Route::get('/informasi', function () {
    return view('landing.informasi');
})->name('informasi');
Route::get('/fitur', function () {
    return view('landing.fitur');
})->name('fitur');
Route::get('/kontak', function () {
    return view('landing.kontak');
})->name('kontak');

// Login 
Route::get('/login', function () {
    return view('auth.login');
})->name('login');