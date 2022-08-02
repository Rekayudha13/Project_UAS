<?php

use App\Models\Pemain;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\StatusController;

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
    return view('Template.main');
});
// Route::get('/', [PemainController::class, 'index']);
Route::get('/pemain', [PemainController::class, 'index'])->name('pemain.index');
Route::get('/pemain/show', [PemainController::class, 'show'])->name('pemain.show');
Route::get('/pemain/tambah', [PemainController::class, 'tambah'])->name('pemain.tambah');
Route::post('/pemain/simpan', [PemainController::class, 'simpan'])->name('pemain.simpan');
Route::get('/pemain/ubah/{id}', [PemainController::class, 'ubah'])->name('pemain.ubah');
Route::post('/pemain/perbaharui', [PemainController::class, 'perbaharui'])->name('pemain.perbaharui');
Route::get('/pemain/hapus/{id}', [PemainController::class, 'hapus'])->name('pemain.hapus');

Route::get('/posisi/ubah/{id}', [PosisiController::class, 'ubah'])->name('posisi.ubah');
Route::post('/posisi/simpan', [PosisiController::class, 'simpan'])->name('posisi.simpan');
Route::get('/posisi/tambah', [PosisiController::class, 'tambah'])->name('posisi.tambah');
Route::get('/posisi/show', [PosisiController::class, 'show'])->name('posisi.show');
Route::get('/posisi', [PosisiController::class, 'index'])->name('posisi.index');
Route::post('/posisi/perbaharui', [PosisiController::class, 'perbaharui'])->name('posisi.perbaharui');
Route::get('/posisi/hapus/{id}', [PosisiController::class, 'hapus'])->name('posisi.hapus');

Route::get('/staf/ubah/{id}', [StafController::class, 'ubah'])->name('staf.ubah');
Route::post('/staf/simpan', [StafController::class, 'simpan'])->name('staf.simpan');
Route::get('/staf/tambah', [StafController::class, 'tambah'])->name('staf.tambah');
Route::get('/staf/show', [StafController::class, 'show'])->name('staf.show');
Route::get('/staf', [StafController::class, 'index'])->name('staf.index');
Route::post('/staf/perbaharui', [StafController::class, 'perbaharui'])->name('staf.perbaharui');
Route::get('/staf/hapus/{id}', [StafController::class, 'hapus'])->name('staf.hapus');

Route::get('/status/ubah/{id}', [StatusController::class, 'ubah'])->name('status.ubah');
Route::post('/status/simpan', [StatusController::class, 'simpan'])->name('status.simpan');
Route::get('/status/tambah', [StatusController::class, 'tambah'])->name('status.tambah');
Route::get('/status/show', [StatusController::class, 'show'])->name('status.show');
Route::get('/status', [StatusController::class, 'index'])->name('status.index');
Route::post('/status/perbaharui', [StatusController::class, 'perbaharui'])->name('status.perbaharui');
Route::get('/status/hapus/{id}', [StatusController::class, 'hapus'])->name('status.hapus');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
