<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});

//Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_auth', [LoginController::class, 'login_auth'])->name('login_post');

// Route Signup
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'register'])->name('signup.store');