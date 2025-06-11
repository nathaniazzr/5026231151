<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\Pegawai2Controller ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\MouseController;
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

