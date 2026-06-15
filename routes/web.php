<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\TagihanAirController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::get('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::get('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


// route pertemuan 1-6
Route::get('nrp', function () {
    return view('5026241035');
});

Route::get('contoh', function () {
    return view('contoh');
});

Route::get('intro', function () {
    return view('intro');
});

Route::get('news', function () {
    return view('news');
});

Route::get('news1', function () {
    return view('news1');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('index', function () {
    return view('index');
});

Route::get('linktree', function () {
    return view('linktree');
});

// route menu
Route::get('menu', function () {
    return view('menu');
});

// route latihan eas
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'create']);
Route::post('/nilaikuliah/simpan', [NilaiKuliahController::class, 'store']);

// CRUD Tabel Keranjang Belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'create']);
Route::post('/keranjangbelanja/simpan', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaController::class, 'destroy']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// route baju
Route::get('/baju', [BajuController::class, 'index']);
Route::get('/baju/cari', [BajuController::class, 'cari']);
Route::get('/baju/tambah', [BajuController::class, 'tambah']);
Route::post('/baju/simpan', [BajuController::class, 'store']);
Route::get('/baju/edit/{id}', [BajuController::class, 'edit']);
Route::post('/baju/update', [BajuController::class, 'update']);
Route::get('/baju/hapus/{id}', [BajuController::class, 'hapus']);

// route eas tagihan air
Route::get('/eas', [TagihanAirController::class, 'index']);
Route::get('/eas/tambah', [TagihanAirController::class, 'create']);
Route::post('/eas/simpan', [TagihanAirController::class, 'store']);