<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index6()
    {
        // Mengambil data dari tabel 'mouse' dengan pagination
        $mahasiswa = DB::table('mahasiswa')->paginate(10); // 10 item per halaman

        // Mengirim data ke view 'index3'
        return view('index6', ['mahasiswa' => $mahasiswa]);
    }

public function tambah5()
{

	// memanggil view tambah
	return view('tambah5');

}

public function store(Request $request)
{
    // Insert data ke table mouse
    DB::table('mykaryawan')->insert([
        'Kode Pegawai' => $request->kodepegawai,  // Nama kolom di tabel mouse
        'Nama Lengkap' => $request->namalengkap,  // Nama kolom di tabel mouse
        'Divisi' => $request->divisi,  // Nama kolom di tabel mouse
        'Departemen' => $request->departemen // Nama kolom di tabel mouse
    ]);

    // Alihkan halaman ke halaman mouse
    return redirect('/mahasiswa');
}


public function editmykaryawan($id)
{
    // Mengambil data mouse berdasarkan ID
    $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->first();  // Gunakan first() untuk objek tunggal

    // Passing data mouse ke view edit
    return view('editmykaryawan', ['mykaryawan' => $mykaryawan]);
}


public function update(Request $request)
{


    // Update data mouse
    DB::table('mahasiswa')->where('NRP', $request->NRP)->update([
        'NRP' => $request->NRP,
        'Nama' => $request->Nama,
        'Jurusan' => $request->Jurusan,
        'IPK' => $request->IPK,
    ]);

    // Redirect ke halaman mouse setelah data berhasil disimpan
    return redirect('/mahasiswa');
}



// // Method untuk hapus data mouse
public function hapus($id)
{
    // Menghapus data mouse berdasarkan ID yang dipilih
    DB::table('mahasiswa')->where('NRP', $id)->delete();

    // Mengalihkan halaman kembali ke halaman daftar mouse
    return redirect('/mahasiswa');
}


}
