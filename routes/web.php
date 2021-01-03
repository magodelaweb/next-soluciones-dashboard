<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registrate', [LoginController::class, 'registrate'])->name('registrate');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function (){
  Route::get('/dashboard', [DashboardController::class, 'index']);
  Route::get('/', [DashboardController::class, 'index']);
});
