<?php

use App\Http\Controllers\feController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// ---------------------------  Frontend  -------------------------------- //
Route::get('/',[feController::class, 'index'])->name('index');
Route::get('/tentang-kami',[feController::class, 'tentang_kami'])->name('tentang_kami');
Route::get('/lowongan-kerja',[feController::class, 'lowongan_kerja'])->name('lowongan_kerja');
Route::get('/prosedur-melamar-kerja',[feController::class, 'prosedur_melamar'])->name('prosedur_melamar');
Route::get('/prosedur-perusahaan',[feController::class, 'prosedur_perusahaan'])->name('prosedur_perusahaan');
Route::get('/kontak-kami',[feController::class, 'kontak_kami'])->name('kontak_kami');