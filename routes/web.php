<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Models\Berita;

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('tupoksi', function () {
    return view('layouts.tupoksi');
});
Route::get('visi-misi', function () {
    return view('layouts.visiMisi');
});
Route::get('tentang-kami', function () {
    return view('layouts.tentangKami');
});

// Detail Berita
Route::resource('detail-berita', DetailController::class);

// Detail Jurnal
Route::resource('detail-jurnal', DJurnalController::class);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Admin
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');
Route::resource('berita', BeritaController::class)->middleware('auth');
Route::resource('galeri', GaleriController::class)->middleware('auth');
Route::resource('jurnal', JurnalController::class)->middleware('auth');


