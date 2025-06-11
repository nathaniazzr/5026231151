<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index4()
    {
        // Mengambil data keranjang dengan paginasi
        $keranjang = DB::table('keranjangbelanja')->paginate(10);  // Menampilkan 10 data per halaman

        // Mengirim data ke view
        return view('index4', ['keranjang' => $keranjang]);
    }


    // method untuk menampilkan view form tambah pegawai
    public function tambah3()
    {

        // memanggil view tambah
        return view('tambah3');


    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'KodeBarang' => 'required',
            'Jumlah' => 'required|integer',
            'Harga' => 'required|numeric',  // Pastikan harga adalah angka
        ]);

        // Memproses dan menyimpan data ke database
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,  // Simpan harga
        ]);

        return redirect('/keranjang');
    }

    public function edit($id) // ada primary key
    {
        // mengambil data keranjang berdasarkan id yang dipilih
        $keranjangbelanja = DB::table('keranjangbelanja')->where('keranjangbelanja_ID',$id)->get();
        // passing data keranjang yang didapat ke view edit.blade.php
        return view('edit',['keranjangbelanja' => $keranjangbelanja]);

    }

    // update data keranjang belanja
    public function update(Request $request)
    {
        // update data keranjang
        DB::table('keranjangbelanja')->where('keranjangbelanja_ID',$request->id)->update([
            'kodebarang' => $request->kode,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        // alihkan halaman ke halaman keranjang
        return redirect('/keranjang');
    }

// Method untuk hapus data keranjang belanja
public function hapus3($id)
{
    // Menghapus data keranjang belanja berdasarkan ID yang dipilih
    DB::table('keranjangbelanja')->where('ID', $id)->delete();

    // Alihkan halaman ke halaman keranjang belanja setelah data dihapus
    return redirect('/keranjang')->with('success', 'Data berhasil dihapus!');
}











}
