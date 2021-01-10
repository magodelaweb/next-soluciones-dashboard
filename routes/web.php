<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetController;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/registrate', [RegisterController::class, 'registrate'])->name('registrate');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [ResetController::class, 'request'])->name('password.request');
Route::post('/forgot-password', [ResetController::class, 'email'])->name('password.email');
Route::get('/reset-password/{token}', [ResetController::class, 'reset'])->name('password.reset');
Route::post('/reset-password', [ResetController::class, 'update'])->name('password.update');

Route::middleware(['auth'])->group(function (){
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
