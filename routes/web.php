<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Models\Berita;

// Home
Route::get('/', [HomeController::class, 'index']);

Route::get('/detail-berita', [DetailController::class, 'index']);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Admin
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');
// Route::get('/berita', [BeritaController::class, 'berita'])->middleware('auth');
// Route::get('/galeri', [GaleriController::class, 'galeri'])->middleware('auth');
// Route::post('/tambah-berita', [BeritaController::class, 'create'])->middleware('auth');
// Route::get('/tambah-galeri', [GaleriController::class, 'tambahGaleri'])->middleware('auth');

Route::resource('berita', BeritaController::class)->middleware('auth');
Route::resource('galeri', GaleriController::class)->middleware('auth');




// Route::get('/', function () {
//     return view('homepage');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/detail-berita', function () {
//     return view('berita');
// });

// Route::get('login', 'App\Http\Controllers\AuthController@login')->name('login');
// // Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
// Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
// Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cek_login:admin']], function () {
//         Route::resource('admin', AdminController::class);
//     });
//     Route::group(['middleware' => ['cek_login:editor']], function () {
//         Route::resource('editor', AdminController::class);
//     });
