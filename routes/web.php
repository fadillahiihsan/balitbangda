<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;


// Home
Route::get('/', [HomeController::class, 'index']);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');



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
// });