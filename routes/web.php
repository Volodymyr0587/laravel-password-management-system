<?php

use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/create', [PasswordController::class, 'create'])
    ->middleware('auth')
    ->name('create');

Route::get('/passwords', [PasswordController::class, 'index'])
    ->middleware('auth')
    ->name('passwords');
Route::post('/passwords', [PasswordController::class, 'store']);

Route::get('/edit/{password}', [PasswordController::class, 'edit'])
    ->middleware('auth')
    ->name('edit');
Route::put('/edit/{password}', [PasswordController::class, 'update']);

Route::delete('/passwords/{password}', [PasswordController::class, 'destroy'])
    ->middleware('auth')
    ->name('passwords.destroy');


// Route::get('/passwords', function () {
//     return view('passwords.index');
// })->middleware('auth')->name('passwords');
