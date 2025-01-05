<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});

// Route Signup
Route::get('/signup', [SignupController::class, 'index'])->name('auth.signup');
Route::post('/signup', [SignupController::class, 'signup'])->name('auth.signup.store');

//Route Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_auth', [LoginController::class, 'login_auth'])->name('login_post');
// Route::post('/logout', [LoginController::class, 'logout'])->name('user.logout')->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout_page'])->name('logout.page');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Route untuk admin
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/adminleastmenu', [AdminController::class, 'lowDemandMenus'])->name('admin.lowDemandMenus');
    Route::get('/admin/popular-menus', [AdminController::class, 'popularMenus'])->name('admin.popularMenus');
    Route::get('/menus', [MenuController::class, 'index'])->name('admin.menus'); // Route for menu list
    Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('admin.menu.destroy'); // Delete route
    Route::get('/admin/menu/edit/{id}', [MenuController::class, 'edit'])->name('admin.menu.edit');//edit route
    Route::put('/admin/menu/update/{id}', [MenuController::class, 'update'])->name('admin.menu.update');//update route
    Route::get('/admin/menu/create', [MenuController::class, 'create'])->name('admin.menu.create');//create route
    Route::post('/admin/menu/store', [MenuController::class, 'store'])->name('admin.menu.store');//submit for new menu route
    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders');//buat liat listnya
    Route::get('/orders/pending', [OrderController::class, 'pendingOrders'])->name('orders.pending');//untuk pending
    Route::post('/orders/{id}/done', [OrderController::class, 'markAsDone'])->name('orders.markAsDone');//untuk status jadi done
});


//Route untuk user
Route::middleware('auth:web')->group(function() {
    // Route di luar cart
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('/about', [HomeController::class, 'about'])->name('user.about');
    Route::get('/menu', [MenuController::class, 'menu'])->name('user.menu');
    Route::get('/user/order-history', [CartController::class, 'orderHistory'])->name('user.orderHistory');

    
    // Route di dalam cart
    Route::get('/user/cart', [CartController::class, 'index'])->name('user.cart');
    Route::post('/user/cart/add', [CartController::class, 'add'])->name('user.cart.add');
    Route::delete('/user/cart/remove/{menuId}', [CartController::class, 'remove'])->name('user.cart.remove');
    Route::post('/user/cart/update/{menuId}', [CartController::class, 'updateQuantity'])->name('user.cart.update');
    Route::post('/cart/order', [CartController::class, 'storeOrder'])->name('cart.storeOrder');
    });

    Route::get('/order-history', [OrderController::class, 'orderHistory'])->name('user.order_history');
