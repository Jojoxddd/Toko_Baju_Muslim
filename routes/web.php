<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/shop', function () {
    return view('shop');
})->middleware('auth');

Route::get('/produk/{kategori}', [ProductController::class, 'kategori'])->name('produk.kategori');

// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//     Route::resource('products', ProductController::class);
// });


Route::middleware('auth')->prefix('admin')->name('admin.dashboard.')->group(function () {
    Route::resource('dashboard', ProductImageController::class);
});





// Route auth register/login/logout (cukup sekali)
Auth::routes();

// Halaman setelah login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Kalau mau custom halaman login/register
Route::get('/login-page', function () {
    return view('auth.login');
});

Route::get('/register-page', function () {
    return view('auth.register');
});
