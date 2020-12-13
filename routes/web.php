<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/kosan', function () {
//     return view('kosan');
// });

// ----------------------- section home -----------------------
Route::get('/home', 'MainController@index'); ///halaman utama
Route::get('/recommended', 'MainController@recommended'); //halaman rekomendasi

// Route::get('/cari', 'Users/MainController@search'); //halaman pencarian
Route::get('/cari/{$key}', 'MainController@search'); //halaman pencarian
Route::get('/tentangkami', 'MainController@about'); //halaman "tentang kami"

// ----------------------- section kos -----------------------
Route::get('/kos/detail/{id}', 'KosController@index');

Route::get('/kos/pesan/{id}', 'KosController@pesan');
Route::get('/kos/order/{id}', 'KosController@order');

Route::get('/kos/tanggapan/{id}', 'KosController@feedback');