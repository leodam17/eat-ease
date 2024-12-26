<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});

//Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_auth', [LoginController::class, 'login_auth'])->name('login_post');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
// Route Signup
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'register'])->name('signup.store');