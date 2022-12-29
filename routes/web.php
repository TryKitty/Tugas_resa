<?php

use App\Http\Controllers\categoriesC;
use App\Http\Controllers\qtasnimC;
use App\Http\Controllers\tb;
use App\Http\Controllers\tt;
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

Route::get('/', [App\Http\Controllers\qtasnimC::class, 'index'])->name('cari.barang');
Route::resource('/barang',qtasnimC::class);
Route::resource('/jenis_barang',categoriesC::class);
Route::resource('/transaksi_terbanyak',tb::class);
Route::resource('/transaksi_terendah',tt::class);
