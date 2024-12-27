<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SignupController;

//Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_auth', [LoginController::class, 'login_auth'])->name('login_post');

// Route di luar cart
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

// Route di dalam cart
Route::get('/user/cart', [CartController::class, 'index'])->name('user.cart');
Route::post('/user/cart/add', [CartController::class, 'add'])->name('user.cart.add');
Route::delete('/user/cart/remove/{menuId}', [CartController::class, 'remove'])->name('user.cart.remove');
Route::post('/user/cart/update/{menuId}', [CartController::class, 'updateQuantity'])->name('user.cart.update');
Route::post('/cart/order', [CartController::class, 'storeOrder'])->name('cart.storeOrder');


// Route Signup
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'register'])->name('signup.store');
