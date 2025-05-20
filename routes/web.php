<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\BidangKerjasamaController;
use App\Http\Controllers\KerjasamaController;
use App\Http\Controllers\UnitPengajuController;
use App\Http\Controllers\PengajuanController;



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
    return view('welcome');
});

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{nim}/edit', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy']);


Route::resource('/pengguna', PenggunaController::class);
Route::resource('/dokumen', DokumenController::class);
Route::resource('/bidang_kerja_sama', BidangKerjaSamaController::class);
Route::resource('/kerja_sama', KerjaSamaController::class);
Route::resource('/unit_pengaju', UnitPengajuController::class);
Route::resource('/pengajuan', PengajuanController::class);
