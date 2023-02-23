<?php

use App\Http\Controllers\admin\authController;
use App\Http\Controllers\admin\kategori_lokerController;
use App\Http\Controllers\admin\lowongan_kerjaController;
use App\Http\Controllers\admin\viewController;
use App\Http\Controllers\admin\beritaController;
use App\Http\Controllers\feController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/ms-admin-ikhsannawawi', function () {
    Artisan::call("migrate:fresh --seed");
    return redirect()->route('index');
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
Route::get('/administrator',[viewController::class, 'admin_dashboard'])->name('admin_dashboard')->middleware('auth');
Route::get('/admin-lowongan-kerja',[viewController::class, 'admin_lowongan_kerja'])->name('admin_lowongan_kerja')->middleware('auth');
Route::get('/admin-kategori-loker',[viewController::class, 'admin_kategori_loker'])->name('admin_kategori_loker')->middleware('auth');
Route::get('/admin-berita',[viewController::class, 'admin_berita'])->name('admin_berita')->middleware('auth');
Route::get('/admin-user',[viewController::class, 'admin_user'])->name('admin_user')->middleware('auth');
// --------------------------- End View Admin  -------------------------------- //




// --------------------------- Start User  -------------------------------- //
Route::get('/admin-login',[authController::class, 'login'])->name('login');
Route::post('/admin-login-proses',[authController::class, 'login_proses'])->name('login_proses');
Route::get('/admin-logout',[authController::class, 'logout'])->name('logout');
// --------------------------- Start User  -------------------------------- //




// --------------------------- Start User  -------------------------------- //
Route::get('/admin-user/add-user',[authController::class, 'add_user'])->name('add_user')->middleware('auth');
Route::post('/admin-user/insert-user',[authController::class, 'insert_user'])->name('insert_user')->middleware('auth');
Route::get('/admin-user/edit-user/{id}',[authController::class, 'edit_user'])->name('edit_user')->middleware('auth');
Route::post('/admin-user/update-user/{id}',[authController::class, 'update_user'])->name('update_user')->middleware('auth');
Route::get('/admin-user/edit-user-password/{id}',[authController::class, 'edit_user_password'])->name('edit_user_password')->middleware('auth');
Route::post('/admin-user/update-user-password/{id}',[authController::class, 'update_user_password'])->name('update_user_password')->middleware('auth');
Route::get('/admin-user/delete-user/{id}',[authController::class, 'delete_user'])->name('delete_user')->middleware('auth');
// --------------------------- End User  -------------------------------- //







// --------------------------- Start Kategori Lowongan Kerja  -------------------------------- //
Route::get('/admin-kategori-loker/add-kategori-loker',[kategori_lokerController::class, 'add_kategori_loker'])->name('add_kategori_loker')->middleware('auth');
Route::post('/admin-kategori-loker/insert-kategori-loker',[kategori_lokerController::class, 'insert_kategori_loker'])->name('insert_kategori_loker')->middleware('auth');
Route::get('/admin-kategori-loker/edit-kategori-loker/{id}',[kategori_lokerController::class, 'edit_kategori_loker'])->name('edit_kategori_loker')->middleware('auth');
Route::post('/admin-kategori-loker/update-kategori-loker/{id}',[kategori_lokerController::class, 'update_kategori_loker'])->name('update_kategori_loker')->middleware('auth');
Route::get('/admin-kategori-loker/delete-kategori-loker/{id}',[kategori_lokerController::class, 'delete_kategori_loker'])->name('delete_kategori_loker')->middleware('auth');
// --------------------------- End Kategori Lowongan Kerja  -------------------------------- //






// --------------------------- Start Lowongan Kerja  -------------------------------- //
Route::get('/admin-lowongan-kerja/add-lowongan-kerja',[lowongan_kerjaController::class, 'add_lowongan_kerja'])->name('add_lowongan_kerja')->middleware('auth');
Route::post('/admin-lowongan-kerja/insert-lowongan-kerja',[lowongan_kerjaController::class, 'insert_lowongan_kerja'])->name('insert_lowongan_kerja')->middleware('auth');
Route::get('/admin-lowongan-kerja/edit-lowongan-kerja/{id}',[lowongan_kerjaController::class, 'edit_lowongan_kerja'])->name('edit_lowongan_kerja')->middleware('auth');
Route::post('/admin-lowongan-kerja/update-lowongan-kerja/{id}',[lowongan_kerjaController::class, 'update_lowongan_kerja'])->name('update_lowongan_kerja')->middleware('auth');
Route::get('/admin-lowongan-kerja/delete-lowongan-kerja/{id}',[lowongan_kerjaController::class, 'delete_lowongan_kerja'])->name('delete_lowongan_kerja')->middleware('auth');
// --------------------------- End Lowongan Kerja  -------------------------------- //






// --------------------------- Start Berita  -------------------------------- //
Route::get('/admin-berita/add-berita',[beritaController::class, 'add_berita'])->name('add_berita')->middleware('auth');
Route::post('/admin-berita/insert-berita',[beritaController::class, 'insert_berita'])->name('insert_berita')->middleware('auth');
Route::get('/admin-berita/edit-berita/{id}',[beritaController::class, 'edit_berita'])->name('edit_berita')->middleware('auth');
Route::post('/admin-berita/update-berita/{id}',[beritaController::class, 'update_berita'])->name('update_berita')->middleware('auth');
Route::get('/admin-berita/delete-berita/{id}',[beritaController::class, 'delete_berita'])->name('delete_berita')->middleware('auth');
// --------------------------- End Berita  -------------------------------- //