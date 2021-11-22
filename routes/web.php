<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Confirmation;
use App\Models\Order;
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
    if (session('id') == null)
        return view('/home', ["title" => "Home"]);
    else {
        if (session('role') == 'admin')
            return redirect('/admin/data-pesanan');
        else {

            return redirect('/user/dashboard');
        }
    }
});

Route::get('/review', function () {
    return view('/review', [
        "title" => "Review"
    ]);
});


Route::get('/review',  [ReviewController::class, 'showReview']);

Route::post('/review/add',  [ReviewController::class, 'addReview'])->name('add_review');

Route::get('/pengumuman',  [PengumumanController::class, 'showPengumuman']);

Route::get('/admin/data-pengumuman',  [PengumumanController::class, 'showDataPengumuman']);

Route::post('/admin/data-pengumuman/add',  [PengumumanController::class, 'addPengumuman'])->name('add_pengumuman');

Route::post('/admin/data-pengumuman/edit',  [PengumumanController::class, 'editPengumuman'])->name('edit_pengumuman');

Route::post('/admin/data-pengumuman/delete',  [PengumumanController::class, 'deletePengumuman'])->name('delete_pengumuman');

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

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/admin/data-pelanggan/add', [UserController::class, 'addUser'])->name('add_user');

Route::post('/admin/data-pelanggan/edit', [UserController::class, 'editUser'])->name('edit_user');

Route::post('/admin/data-pelanggan/delete', [UserController::class, 'deleteUser'])->name('delete_user');

Route::get('/user/profile', function () {
    return view(
        'user/profile',
        [
            "title" => "Profile"
        ]
    );
});

Route::get('/user/dashboard', function () {
    $id = session('id');
    $orders = Order::select('*', 'orders.id as orderId')
        ->join('users', 'orders.user_id', '=', 'users.id')->where('user_id', $id)->get();
    return view(
        'user/dashboard',
        [
            "title" => "Dashboard",
            'orders' => $orders
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

Route::post('/admin/data-pesanan/delete',  [OrderController::class, 'delete'])->name('delete_order');

Route::post('/admin/data-pesanan/edit',  [OrderController::class, 'update'])->name('edit_order');

Route::post('/order/add',  [OrderController::class, 'add'])->name('add_order');

Route::post('/confirmation/add',  [ConfirmationController::class, 'add'])->name('add_confirmation');

Route::get('/admin/data-pelanggan',  [UserController::class, 'showUser']);

Route::get('/admin/data-konfirmasi',  [ConfirmationController::class, 'index']);

Route::post('/admin/data-konfirmasi/verifikasi',  [ConfirmationController::class, 'verifikasi'])->name('verifikasi_pembayaran');

Route::post('/admin/data-konfirmasi/delete',  [ConfirmationController::class, 'delete'])->name('delete_pembayaran');

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
