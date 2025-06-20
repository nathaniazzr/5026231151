<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MykaryawanController extends Controller
{
    public function indexmykaryawan()
    {
    	// mengambil data dari table mykaryawan
    	$mykaryawan = DB::table('mykaryawan')->get();

    	// mengirim data mykaryawan ke view index
    	return view('indexmykaryawan',['mykaryawan' => $mykaryawan]);

    }



    public function editmykaryawan($id)
    {
        // Mengambil data karyawan berdasarkan kodepegawai
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->first();  // Ganti get() dengan first()

        // Passing data karyawan ke view
        return view('editmykaryawan', ['mykaryawan' => $mykaryawan]);
    }


    public function update(Request $request)
    {
        // Update data karyawan berdasarkan kodepegawai
        DB::table('mykaryawan') ->where('kodepegawai', $request->kodepegawai)->update([
                'kodepegawai' => $request->kodepegawai,
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen
            ]);

        // Redirect setelah update
        return redirect('/eas');
    }

    // Controller: MykaryawanController.php

public function viewmykaryawan($id)
{
    // Mengambil data karyawan berdasarkan kodepegawai
    $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->first();

    // Mengirim data ke view viewmykaryawan
    return view('viewmykaryawan', ['mykaryawan' => $mykaryawan]);
}

}

