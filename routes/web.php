<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

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
    return view('home');
});

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mata-kuliah',[MataKuliahController::class,'index']);
Route::get('/nilai',[NilaiController::class,'index']);