<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');


Route::get('/login', [AuthController::class, 'showAuthForm'])->name('auth');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.submit');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


Route::get('/', function () {
    return view('welcome');
})->name('home');