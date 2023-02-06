<?php

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
    return view('welcome');
});

// route resource
Route::resource('/bahans', \App\Http\Controllers\BahanController::class);
Route::resource('/jenisproduks', \App\Http\Controllers\JenisprodukController::class);
Route::resource('/produks', \App\Http\Controllers\ProdukController::class);
Route::resource('/stoks', \App\Http\Controllers\StokController::class);
Route::resource('/penjualans', \App\Http\Controllers\PenjualanController::class);
Route::resource('/prediksis', \App\Http\Controllers\PrediksiController::class);
