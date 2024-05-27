<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

// Halaman utama diarahkan ke halaman registrasi
Route::get('/', [RegisterController::class, 'index'])->name('register');
Route::post('actionregister', [RegisterController::class, 'register'])->name('actionregister');

// Rute login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Rute dasbor dengan middleware auth
Route::get('/dasbor', [DashboardController::class, 'index'])->name('dasbor')->middleware('auth');

// Rute logout dengan middleware web
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout')->middleware('web');

// Rute untuk halaman statis
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
