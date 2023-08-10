<?php

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

Route::get('/', function () {
    return view('layout.login');
});
Route::get('/dashboard', function () {
    return view('admin.index');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/datasantri', function () {
    return view('admin.datasantri');
});
Route::get('/datakamar', function () {
    return view('admin.datakamar');
});
Route::get('/datakelas', function () {
    return view('admin.datakelas');
});
Route::get('/datakesehatan', function () {
    return view('admin.datakesehatan');
});
Route::get('/izinkeluar', function () {
    return view('admin.izinkeluar');
});
Route::get('/izinpulang', function () {
    return view('admin.izinpulang');
});

Route::get('/izinsakit', function () {
    return view('admin.izinsakit');
});

Route::get('/datapembayaran', function () {
    return view('admin.datapembayaran');
});
Route::get('/riwayatpembayaran', function () {
    return view('admin.riwayatpembayaran');
});


