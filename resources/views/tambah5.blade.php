@extends('template')

@section('content')

<h3 style="color: #333;">Tambah Mahasiswa</h3> <!-- Warna font untuk judul -->
<a href="/mahasiswa" class="btn" style="background-color: #efb7c0; color:white; border-radius: 10px"> Kembali</a>

<br />
<br />
<!-- Form untuk menambah karyawan -->
<form action="/mahasiswa/store" method="post">
    {{ csrf_field() }}


    <div class="row">
        <div class="col-3" style="color: #333;">NRP</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="text" name="NRP" required="required" class="form-control">
        </div>
    </div>

    <!-- Kolom Kode Pegawai (Bisa menggunakan auto-increment di database) -->
    <div class="row">
        <div class="col-3" style="color: #333;">Nama</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="text" name="Nama" required="required" class="form-control">
        </div>
    </div>

    <!-- Kolom Divisi -->
    <div class="row">
        <div class="col-3" style="color: #333;">Jurusan</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="text" name="Jurusan" required="required" class="form-control">
        </div>
    </div>

    <!-- Kolom Departemen -->
    <div class="row">
        <div class="col-3" style="color: #333;">IPK</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="text" name="IPK" required="required" class="form-control">
        </div>
    </div>

    <br />
    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>

@endsection
