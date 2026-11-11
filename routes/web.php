<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiBarangController;
use App\Http\Controllers\DashboardController;

Route::redirect('/', '/login');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware(['POST'])->redirect(function () {

//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     Route::resource('barang', BarangController::class);
//     Route::resource('kategori', KategoriController::class);
//     Route::resource('transaksi-barang', TransaksBarangController::class);

// });
