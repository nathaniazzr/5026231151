<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function index5()
    {
    	// mengambil data dari table pegawai
    	$karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('index5',['karyawan' => $karyawan]);

    }

    public function tambah4()
{

	// memanggil view tambah
	return view('tambah4');

}

public function store(Request $request)
{
    // insert data ke table karyawan
    DB::table('karyawan')->insert([

        'kodepegawai' => $request->kode,
        'namalengkap' => $request->nama,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);
    // alihkan halaman ke halaman karyawan
    return redirect('/karyawan');

    // Alihkan halaman ke halaman mouse

}

public function edit($id) // ada primary keyAdd commentMore actions
{

    $karyawan = DB::table('karyawan')->where('kodepegawai',$id)->get();
    // passing data karyawan yang didapat ke view edit.blade.php
    return view('edit',['karyawan' => $karyawan]);
}

// Method untuk hapus data mouse

// method untuk hapus data pegawai
public function hapus4($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
}


}
