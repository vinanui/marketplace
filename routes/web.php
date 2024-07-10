<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CateringController;
use App\Http\Controllers\OrderController;

// Rute untuk registrasi dan login
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Tambahkan nama 'login' di sini
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk halaman katering
Route::get('/caterings', [CateringController::class, 'index']);
Route::get('/caterings/{id}', [CateringController::class, 'show']);
Route::get('/home', function() {
    return view('home');
});

// Rute untuk pesanan
Route::post('/orders', [OrderController::class, 'store']);


