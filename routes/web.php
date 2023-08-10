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


