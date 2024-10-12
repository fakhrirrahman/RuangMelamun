<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Kegiatan1Controller;
use App\Http\Controllers\Kegiatan2Controller;
use App\Http\Controllers\SlideController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot-password-act');

Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [LoginController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/book', [HomeController::class, 'book'])->name('book');
Route::get('/kegiatan', [HomeController::class, 'activity'])->name('kegiatan');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/viewmore', [HomeController::class, 'view'])->name('viewmore');
Route::get('/viewmore2', [HomeController::class, 'view2'])->name('viewmore2');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/data', [AdminController::class, 'getData'])->name('admin.data');
    Route::resource('/buku', BukuController::class);
    Route::resource('/kegiatan1', Kegiatan1Controller::class);
    Route::resource('/kegiatan2', Kegiatan2Controller::class);
    Route::resource('/slide', SlideController::class);
    Route::resource('/artikel', ArtikelController::class);
});



