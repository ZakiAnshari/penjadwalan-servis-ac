<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\JadwalServiceController;

Route::middleware('guest')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landing');
    Route::get('/tentangkami', [LandingPageController::class, 'tentangkami'])->name('tentangkami');
    Route::get('/layanan', [LandingPageController::class, 'layanan'])->name('layanan');
    Route::get('/kontak', [LandingPageController::class, 'kontak'])->name('kontak');
    Route::post('/pelangganpesan-add', [LandingPageController::class, 'store'])->name('pelangganpesan.store');


    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticating']);
});

//ADMIN
Route::middleware(['auth'])->group(function () {
    // LOGOUT
    Route::get('/logout', [AuthController::class, 'logout']);
    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index']);
    // DATA PELANGGAN
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::post('/pelanggan-add', [PelangganController::class, 'store'])->name('pelanggan.store');
    Route::get('/pelanggan-edit/{id}', [PelangganController::class, 'edit']);
    Route::post('/pelanggan-edit/{id}', [PelangganController::class, 'update']);
    Route::get('/pelanggan-destroy/{id}', [PelangganController::class, 'destroy']);
    Route::get('/pelanggan-show/{id}', [PelangganController::class, 'show'])->name('pelanggan.show');
    // DATA TEKNISI
    Route::get('/teknisi', [TeknisiController::class, 'index'])->name('teknisi.index');
    Route::post('/teknisi-add', [TeknisiController::class, 'store'])->name('teknisi.store');
    Route::get('/teknisi-edit/{id}', [TeknisiController::class, 'edit']);
    Route::post('/teknisi-edit/{id}', [TeknisiController::class, 'update']);
    Route::get('/teknisi-destroy/{id}', [TeknisiController::class, 'destroy']);
    Route::get('/teknisi-show/{id}', [TeknisiController::class, 'show'])->name('teknisi.show');
    // DATA JADWAL SERVICE
    Route::get('/jadwalservice', [JadwalServiceController::class, 'index'])->name('jadwalservice.index');
    Route::post('/jadwalservice-add', [JadwalServiceController::class, 'store'])->name('jadwalservice.store');
    Route::get('/jadwalservice-edit/{id}', [JadwalServiceController::class, 'edit']);
    Route::post('/jadwalservice-edit/{id}', [JadwalServiceController::class, 'update']);
    Route::get('/jadwalservice-destroy/{id}', [JadwalServiceController::class, 'destroy']);
    Route::get('/jadwalservice-show/{id}', [JadwalServiceController::class, 'show'])->name('jadwalservice.show');
    Route::put('/jadwalservice/{id}/selesai', [JadwalServiceController::class, 'tandaiSelesai'])->name('jadwalservice.selesai');
    //Laporan
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan-cetak', [LaporanController::class, 'cetaklaporan'])->name('laporan.cetak');
    //MONITORING
    Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring.index');
    // USER
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::post('/user-add', [UserController::class, 'store'])->name('user.store');
    Route::get('/user-edit/{id}', [UserController::class, 'edit']);
    Route::post('/user-edit/{id}', [UserController::class, 'update']);
    Route::get('/user-destroy/{id}', [UserController::class, 'destroy']);
    Route::get('/user-show/{id}', [UserController::class, 'show'])->name('user.show');
});
