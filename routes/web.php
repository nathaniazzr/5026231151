<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\Pegawai2Controller ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\KaryawanController;
//import java.io;


//
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h2>Halo, Selamat datang di Laravel! www.malasngoding.com</h2>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('hello', [Link::class, 'helloworld']);

Route::get('halo', function () {
    return view('halo');
});

Route::get('index', function () {
    return view('index');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('pertama', function () {
    return view('pertama');
});

Route::get('template1', function () {
    return view('template1');
});

Route::get('tugas', function () {
    return view('tugas');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('uts', function () {
    return view('uts');
});

Route::get('bootstrap', function () {
    return view('bootstrap');
});

Route::get('hello', [LinkController::class, 'blog'])->name('helloworld');

Route::get('dosen', [Link::class,'index']);
//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);



// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'] );

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);



//route MOUSE CRUD
Route::get('/mouse', [MouseController::class, 'index3']);
Route::get('/mouse/tambah', [MouseController::class, 'tambah2']);
Route::post('/mouse/store', [MouseController::class, 'store']);
Route::get('/mouse/edit/{id}', [MouseController::class, 'edit2']);
Route::put('/mouse/update', [MouseController::class, 'update']);


Route::get('/mouse/hapus/{id}', [MouseController::class, 'hapus2']);





// Menampilkan data keranjang
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index4']);

// Menampilkan form tambah barang ke keranjang
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'tambah3']);

// Menyimpan data keranjang
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store']);

// Menampilkan form edit barang ke keranjang
Route::get('/keranjang/edit/{id}', [KeranjangBelanjaController::class, 'edit']);

// Update data keranjang
Route::post('/keranjang/update', [KeranjangBelanjaController::class, 'update']);

// Menghapus data keranjang
Route::get('/keranjang/hapus/{id}', [KeranjangBelanjaController::class, 'hapus3']);

// crud karyawanAdd commentMore actions
Route::get('/karyawan', [KaryawanController::class,'index5']);
Route::get('/karyawan/tambah', [KaryawanController::class,'tambah4']);
Route::post('/karyawan/store', [KaryawanController::class,'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class,'edit4']);
Route::post('/karyawan/update', [KaryawanController::class,'update']);
Route::get('/karyawan/hapus/{id}',[KaryawanController::class,'hapus4']);
Route::get('/karyawan/cari',[KaryawanController::class,'cari']);
