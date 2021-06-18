<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WaliPutraController;
use App\Http\Controllers\WaliPutriController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/wali/putra', [WaliPutraController::class, 'index'])->name('dasborWaliPutra');
Route::get('/wali/putra/detail/{id}', [WaliPutraController::class, 'detail']);
Route::get('/wali/putra/baru', [WaliPutraController::class, 'tambah']);
Route::post('/wali/putra/proses/simpan', [WaliPutraController::class, 'simpan']);
Route::get('/wali/putra/sunting/{id}', [WaliPutraController::class, 'sunting']);
Route::post('/wali/putra/proses/hapus', [WaliPutraController::class, 'hapus']);


