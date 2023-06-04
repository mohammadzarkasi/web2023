<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\PesertaMatkulController;
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


Route::get('/uji', function () {
    return 'ini adalah route "uji"';
});


Route::get('/login', [LoginController::class, 'index']);

Route::get('/mahasiswa', [MahasiswaController::class, 'page_index']);
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'page_tambah']);
Route::get('/mahasiswa/edit', [MahasiswaController::class, 'page_edit']);
Route::get('/mahasiswa/detail', [MahasiswaController::class, 'page_detail']);
Route::get('/mahasiswa/hapus', [MahasiswaController::class, 'hapus']);
Route::post('/mahasiswa/simpan', [MahasiswaController::class, 'simpan']);
Route::post('/mahasiswa/update', [MahasiswaController::class, 'update']);


Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/peserta', [PesertaMatkulController::class, 'index']);
Route::get('/peserta/tambah', [PesertaMatkulController::class, 'page_tambah']);
Route::post('/peserta/simpan', [PesertaMatkulController::class, 'simpan']);