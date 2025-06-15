@extends('template')

@section('content')

<h3 style="color: #333;">Tambah Karyawan</h3> <!-- Warna font untuk judul -->
<a href="/karyawan" class="btn" style="background-color: #efb7c0; color:white; border-radius: 10px"> Kembali</a>

<br />
<br />
<!-- Form untuk menambah karyawan -->
<form action="/karyawan/store" method="post">
    {{ csrf_field() }}


    <div class="row">
        <div class="col-3" style="color: #333;">Kode Pegawai</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="text" name="kode" required="required" class="form-control">
        </div>
    </div>

    <!-- Kolom Kode Pegawai (Bisa menggunakan auto-increment di database) -->
    <div class="row">
        <div class="col-3" style="color: #333;">Nama Lengkap</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="text" name="nama" required="required" class="form-control">
        </div>
    </div>

    <!-- Kolom Divisi -->
    <div class="row">
        <div class="col-3" style="color: #333;">Divisi</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="text" name="divisi" required="required" class="form-control">
        </div>
    </div>

    <!-- Kolom Departemen -->
    <div class="row">
        <div class="col-3" style="color: #333;">Departemen</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="text" name="departemen" required="required" class="form-control">
        </div>
    </div>

    <br />
    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>

@endsection
