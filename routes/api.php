<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\StatusController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/pemain', function (Request $request) {
    return $request->user();
});
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
Route::get('/pemain', [PemainController::class, 'index']);
Route::get('/pemain/show', [PemainController::class, 'show']);
Route::post('/pemain/simpan', [PemainController::class, 'simpan'])->middleware('auth:api');
Route::post('/pemain/perbaharui', [PemainController::class, 'perbaharui'])->middleware('auth:api');
Route::get('/pemain/hapus/{id}', [PemainController::class, 'hapus'])->middleware('auth:api');

Route::post('/posisi/simpan', [PosisiController::class, 'simpan'])->middleware('auth:api');
Route::get('/posisi/show', [PosisiController::class, 'show']);
Route::get('/posisi', [PosisiController::class, 'index']);
Route::post('/posisi/perbaharui', [PosisiController::class, 'perbaharui'])->middleware('auth:api');
Route::get('/posisi/hapus/{id}', [PosisiController::class, 'hapus'])->middleware('auth:api');

Route::post('/staf/simpan', [StafController::class, 'simpan'])->middleware('auth:api');
Route::get('/staf/show', [StafController::class, 'show']);
Route::get('/staf', [StafController::class, 'index']);
Route::post('/staf/perbaharui', [StafController::class, 'perbaharui'])->middleware('auth:api');
Route::get('/staf/hapus/{id}', [StafController::class, 'hapus'])->middleware('auth:api');

Route::post('/status/simpan', [StatusController::class, 'simpan'])->middleware('auth:api');
Route::get('/status/show', [StatusController::class, 'show']);
Route::get('/status', [StatusController::class, 'index']);
Route::post('/status/perbaharui', [StatusController::class, 'perbaharui'])->middleware('auth:api');
Route::get('/status/hapus/{id}', [StatusController::class, 'hapus'])->middleware('auth:api');
