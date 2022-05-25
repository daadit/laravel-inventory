<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\SupplierController;
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

Route::get('/jenis', [JenisController::class, 'index'])->name('jenis');
Route::post('/jenis/save', [JenisController::class, 'save'])->name('savejenis');
Route::put('/jenis/update', [JenisController::class, 'update'])->name('updatejenis');
Route::delete('/jenis/delete', [JenisController::class, 'delete'])->name('deletejenis');
Route::get('/jenis/report', [JenisController::class, 'report'])->name('reportjenis');

Route::get('/satuan', [SatuanController::class, 'index'])->name('satuan');
Route::post('/satuan/save', [SatuanController::class, 'save'])->name('savesatuan');
Route::put('/satuan/update', [SatuanController::class, 'update'])->name('updatesatuan');
Route::delete('/satuan/delete', [SatuanController::class, 'delete'])->name('deletesatuan');
Route::get('/satuan/report', [SatuanController::class, 'report'])->name('reportsatuan');

Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
Route::post('/supplier/save', [SupplierController::class, 'save'])->name('savesupplier');
Route::put('/supplier/update', [SupplierController::class, 'update'])->name('updatesupplier');
Route::delete('/supplier/delete', [SupplierController::class, 'delete'])->name('deletesupplier');
Route::get('/supplier/report', [SupplierController::class, 'report'])->name('reportsupplier');

Route::get('/barang', [HomeController::class, 'index'])->name('barang');

Route::get('/pembelian', [HomeController::class, 'index'])->name('pembelian');
Route::get('/penjualan', [HomeController::class, 'index'])->name('penjualan');

Route::get('/report-stok-barang', [HomeController::class, 'index'])->name('report-stok-barang');
Route::get('/report-pembelian', [HomeController::class, 'index'])->name('report-pembelian');
Route::get('/report-penjualan', [HomeController::class, 'index'])->name('report-penjualan');
