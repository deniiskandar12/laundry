<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/home', [
        "title" => "Home"
    ]);
});

Route::get('/review', function () {
    return view('/review', [
        "title" => "Review"
    ]);
});

Route::get('/pengumuman', function () {
    return view('/pengumuman', [
        "title" => "Pengumuman"
    ]);
});

Route::get('/login', function () {
    return view(
        'login',
        [
            "title" => "Login"
        ]
    );
});

Route::get('/register', function () {
    return view(
        'register',
        [
            "title" => "Sign Up"
        ]
    );
});


Route::post('/login', [AuthController::class, 'doLogin'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/user/profile', function () {
    return view(
        'user/profile',
        [
            "title" => "Profile"
        ]
    );
});

Route::get('/user/dashboard', function () {
    return view(
        'user/dashboard',
        [
            "title" => "Dashboard"
        ]
    );
});

Route::get('/user/review', function () {
    return view(
        'user/review',
        [
            "title" => "Review"
        ]
    );
});

Route::get('/user/pesan', function () {
    return view(
        'user/pesan',
        [
            "title" => "Pesan"
        ]
    );
});

Route::get('/user/checkout', function () {
    return view(
        'user/checkout',
        [
            "title" => "Checkout"
        ]
    );
});

Route::get('/admin/dashboard', function () {
    return view(
        'admin/dashboard',
        [
            "title" => "Dashboard"
        ]
    );
});

Route::get('/admin/data-pesanan',  [OrderController::class, 'index']);

Route::get('/admin/data-pelanggan',  [UserController::class, 'showUser']);

Route::get('/admin/detail-pesanan', function () {
    return view(
        'admin/detail_pesanan',
        [
            "title" => "Detail Pesanan"
        ]
    );
});

Route::get('/admin/tambah-pelanggan', function () {
    return view(
        'admin/tambah_pelanggan',
        [
            "title" => "Tambah Pelanggan"
        ]
    );
});
