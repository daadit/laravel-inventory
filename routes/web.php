<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user/save', [UserController::class, 'save'])->name('saveuser');
Route::put('/user/update', [UserController::class, 'update'])->name('updateuser');
Route::delete('/user/delete', [UserController::class, 'delete'])->name('deleteuser');
Route::get('/user/report', [UserController::class, 'report'])->name('reportuser');

Route::get('/jenis', [HomeController::class, 'index'])->name('jenis');
Route::get('/satuan', [HomeController::class, 'index'])->name('satuan');
Route::get('/supplier', [HomeController::class, 'index'])->name('supplier');
Route::get('/barang', [HomeController::class, 'index'])->name('barang');

Route::get('/pembelian', [HomeController::class, 'index'])->name('pembelian');
Route::get('/penjualan', [HomeController::class, 'index'])->name('penjualan');

Route::get('/report-stok-barang', [HomeController::class, 'index'])->name('report-stok-barang');
Route::get('/report-pembelian', [HomeController::class, 'index'])->name('report-pembelian');
Route::get('/report-penjualan', [HomeController::class, 'index'])->name('report-penjualan');
