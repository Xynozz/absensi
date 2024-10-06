<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JabatanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('absensi', AbsensiController::class);
    Route::resource('jabatan', JabatanController::class);
});

Route::group(['prefix' => 'karyawan'], function () {
    Route::get('absensi', [AbsensiController::class, 'create']);
    Route::get('cuti', [CutiController::class, 'create']);
});
