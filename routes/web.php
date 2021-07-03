<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WaliPutraController;
use App\Http\Controllers\WaliPutriController;
use App\Http\Controllers\SiswaController;

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

Route::get('/wali/putri', [WaliPutriController::class, 'index'])->name('dasborWaliPutri');
Route::get('/wali/putri/detail/{id}', [WaliPutriController::class, 'detail']);
Route::get('/wali/putri/baru', [WaliPutriController::class, 'tambah']);
Route::post('/wali/putri/proses/simpan', [WaliPutriController::class, 'simpan']);
Route::get('/wali/putri/sunting/{id}', [WaliPutriController::class, 'sunting']);
Route::post('/wali/putri/proses/hapus', [WaliPutriController::class, 'hapus']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('dasborSiswa');
Route::get('/siswa/detail/{id}', [SiswaController::class, 'detail']);
Route::get('/siswa/baru', [SiswaController::class, 'tambah']);
Route::post('/siswa/proses/simpan', [SiswaController::class, 'simpan']);
Route::get('/siswa/sunting/{id}', [SiswaController::class, 'sunting']);
Route::post('/siswa/proses/hapus', [SiswaController::class, 'hapus']);
