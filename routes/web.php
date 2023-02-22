<?php

use App\Http\Controllers\admin\kategori_lokerController;
use App\Http\Controllers\admin\viewController;
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

Route::get('/a', function () {
    return view('welcome');
});


// --------------------------- Start Frontend  -------------------------------- //
Route::get('/',[feController::class, 'index'])->name('index');
Route::get('/tentang-kami',[feController::class, 'tentang_kami'])->name('tentang_kami');
Route::get('/lowongan-kerja',[feController::class, 'lowongan_kerja'])->name('lowongan_kerja');
Route::get('/prosedur-melamar-kerja',[feController::class, 'prosedur_melamar'])->name('prosedur_melamar');
Route::get('/prosedur-perusahaan',[feController::class, 'prosedur_perusahaan'])->name('prosedur_perusahaan');
Route::get('/kontak-kami',[feController::class, 'kontak_kami'])->name('kontak_kami');
Route::get('/berita',[feController::class, 'berita'])->name('berita');
// --------------------------- End Frontend  -------------------------------- //



// --------------------------- Start View Admin  -------------------------------- //
Route::get('/administrator',[viewController::class, 'admin_dashboard'])->name('admin_dashboard');
Route::get('/admin-lowongan-kerja',[viewController::class, 'admin_lowongan_kerja'])->name('admin_lowongan_kerja');
Route::get('/admin-kategori-loker',[viewController::class, 'admin_kategori_loker'])->name('admin_kategori_loker');
Route::get('/admin-berita',[viewController::class, 'admin_berita'])->name('admin_berita');
// --------------------------- End View Admin  -------------------------------- //




// --------------------------- Start View Admin  -------------------------------- //
Route::get('/admin-kategori-loker/add-kategori-loker',[kategori_lokerController::class, 'add_kategori_loker'])->name('add_kategori_loker');
Route::post('/admin-kategori-loker/insert-kategori-loker',[kategori_lokerController::class, 'insert_kategori_loker'])->name('insert_kategori_loker');
Route::get('/admin-kategori-loker/edit-kategori-loker/{id}',[kategori_lokerController::class, 'edit_kategori_loker'])->name('edit_kategori_loker');
Route::post('/admin-kategori-loker/update-kategori-loker/{id}',[kategori_lokerController::class, 'update_kategori_loker'])->name('update_kategori_loker');
Route::get('/admin-kategori-loker/delete-kategori-loker/{id}',[kategori_lokerController::class, 'delete_kategori_loker'])->name('delete_kategori_loker');
// --------------------------- End View Admin  -------------------------------- //