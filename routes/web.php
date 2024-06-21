<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AktorController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PegawaiController;


Route::get('/', [AktorController::class, 'login'])->name('login');
Route::post('/masuk', [AktorController::class, 'masuk'])->name('masuk');
Route::get('/daftar', [AktorController::class, 'daftar'])->name('daftar');
Route::post('/tambah_user', [AktorController::class, 'tambah_user'])->name('tambah_user');
Route::get('/lupa', [AktorController::class, 'lupa'])->name('lupa');
Route::post('/pw_baru', [AktorController::class, 'pw_baru'])->name('pw_baru');
Route::get('/logout', [AktorController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth', 'cekRole:admin']], function () {
    Route::get('/admin', [AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/profil_admin', [AktorController::class,'profil_admin'])->name('profil_admin');
    Route::post('/edit_admin', [AktorController::class,'edit_admin'])->name('edit_admin');

    Route::get('/daftar_pegawai', [PegawaiController::class,'daftar_pegawai'])->name('daftar_pegawai');
    Route::post('/tambah_pegawai', [PegawaiController::class,'tambah_pegawai'])->name('tambah_pegawai');
    Route::get('/update_pegawai/{id}', [PegawaiController::class, 'update_pegawai'])->name('update_pegawai');
    Route::get('/detail_pegawai/{id}', [PegawaiController::class, 'detail_pegawai'])->name('detail_pegawai');
    Route::post('/pegawai/{id}', [PegawaiController::class,'edit_pegawai'])->name('edit_pegawai');
    Route::get('/pegawai/{id}', [PegawaiController::class, 'delete_pegawai'])->name('delete_pegawai');

    Route::get('/daftar_jabatan', [JabatanController::class,'daftar_jabatan'])->name('daftar_jabatan');
    Route::post('/tambah_jabatan', [JabatanController::class,'tambah_jabatan'])->name('tambah_jabatan');
    Route::post('/jabatan/{id}', [JabatanController::class,'edit_jabatan'])->name('edit_jabatan');
    Route::get('/jabatan/{id}', [JabatanController::class, 'delete_jabatan'])->name('delete_jabatan');

    Route::get('/daftar_departemen', [DepartemenController::class,'daftar_departemen'])->name('daftar_departemen');
    Route::post('/tambah_departemen', [DepartemenController::class,'tambah_departemen'])->name('tambah_departemen');
    Route::post('/departemen/{id}', [DepartemenController::class,'edit_departemen'])->name('edit_departemen');
    Route::get('/departemen/{id}', [DepartemenController::class, 'delete_departemen'])->name('delete_departemen');

    Route::get('/daftar_pendidikan', [PendidikanController::class,'daftar_pendidikan'])->name('daftar_pendidikan');
    Route::post('/tambah_pendidikan', [PendidikanController::class,'tambah_pendidikan'])->name('tambah_pendidikan');
    Route::post('/pendidikan/{id}', [PendidikanController::class,'edit_pendidikan'])->name('edit_pendidikan');
    Route::get('/pendidikan/{id}', [PendidikanController::class, 'delete_pendidikan'])->name('delete_pendidikan');

    Route::get('/daftar_status', [StatusController::class,'daftar_status'])->name('daftar_status');
    Route::post('/tambah_status', [StatusController::class,'tambah_status'])->name('tambah_status');
    Route::post('/status/{id}', [StatusController::class,'edit_status'])->name('edit_status');
    Route::get('/status/{id}', [StatusController::class, 'delete_status'])->name('delete_status');

    Route::get('/daftar_profil', [AktorController::class,'daftar_profil'])->name('daftar_profil');
    Route::post('/tambah_profil', [AktorController::class,'tambah_profil'])->name('tambah_profil');
    Route::get('/profil/{id}', [AktorController::class, 'delete_profil'])->name('delete_profil');

});
