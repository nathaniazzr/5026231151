<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MouseController extends Controller
{
    public function index3()
    {
        // Mengambil data dari tabel 'mouse' dengan pagination
        $mouse = DB::table('mouse')->paginate(10); // 10 item per halaman

        // Mengirim data ke view 'index3'
        return view('index3', ['mouse' => $mouse]);
    }

public function tambah2()
{

	// memanggil view tambah
	return view('tambah2');

}

public function store(Request $request)
{
    // Insert data ke table mouse
    DB::table('mouse')->insert([
        'merk_mouse' => $request->merk_mouse,  // Nama kolom di tabel mouse
        'harga_mouse' => $request->harga_mouse,  // Nama kolom di tabel mouse
        'tersedia' => $request->tersedia,  // Nama kolom di tabel mouse
        'berat' => $request->berat  // Nama kolom di tabel mouse
    ]);

    // Alihkan halaman ke halaman mouse
    return redirect('/mouse');
}
// Method untuk edit data mouse

public function edit2($id)
{
    // Mengambil data mouse berdasarkan ID
    $mouse = DB::table('mouse')->where('ID', $id)->first();  // Gunakan first() untuk objek tunggal

    // Passing data mouse ke view edit
    return view('edit2', ['mouse' => $mouse]);
}


public function update(Request $request)
{
    // Validasi data
    $validated = $request->validate([
        'merk_mouse' => 'required|string|max:255',
        'harga_mouse' => 'required|numeric',
        'tersedia' => 'required|string|max:50',
        'berat' => 'required|numeric',
    ]);

    // Update data mouse
    DB::table('mouse')->where('ID', $request->id)->update([
        'merk_mouse' => $request->merk_mouse,
        'harga_mouse' => $request->harga_mouse,
        'tersedia' => $request->tersedia,
        'berat' => $request->berat,
    ]);

    // Redirect ke halaman mouse setelah data berhasil disimpan
    return redirect('/mouse');
}










// Method untuk hapus data mouse
public function hapus2($id)
{
    // Menghapus data mouse berdasarkan ID yang dipilih
    DB::table('mouse')->where('ID', $id)->delete();

    // Mengalihkan halaman kembali ke halaman daftar mouse
    return redirect('/mouse');
}


}
