<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
{
    AuthController,
    DashboardController,
    SiswaController,
    JurusanController
    
};

Route::get('/', function () {
    return view('home.welcome');
});

// Route Login & Logout
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister'])->name('postregister');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route siswa
Route::get('/siswa/data', [SiswaController::class, 'data'])->name('siswa.data');
Route::resource('/siswa', SiswaController::class);

// Route Jurusan
Route::get('/jurusan/data', [JurusanController::class, 'data'])->name('jurusan.data');
Route::resource('/jurusan', JurusanController::class);

