<?php

use Illuminate\Support\Facades\Route;
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

<<<<<<< HEAD
=======
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


>>>>>>> 57108d3 (Pertemuan 13)
