@extends('template')

@section('content')

<style>
    /* Menambahkan gambar latar belakang pada seluruh halaman */
    body {
        background-image: url('img/bg.jpeg'); /* Ganti dengan path gambar Anda */
        background-size: cover;
        background-position: center;
        background-attachment: fixed; /* Menjadikan background tetap saat scroll */
        color: white; /* Mengubah warna teks agar kontras dengan latar belakang */
    }

    /* Styling untuk tabel */
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Styling header tabel */
    .custom-table th {
        padding: 12px 15px;
        text-align: center;
        background-color: #5c6bc0;
        color: white;
    }

    /* Styling baris tabel */
    .custom-table td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #5c6bc0; /* Garis ungu horizontal */
    }
</style>

<h3>Data Karyawan</h3>




<br>

<table class="custom-table">
    <thead>
        <tr>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Kode Pegawai</th>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Nama Lengkap</th>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Divisi</th>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Departemen</th>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mykaryawan as $w)
        <tr>
            <td style="padding: 12px 15px; text-align: center;">{{ $w->kodepegawai}}</td>
            <td style="padding: 12px 15px; text-align: center;">{{ $w->namalengkap}}</td>
            <td style="padding: 12px 15px; text-align: center;">{{ $w->divisi}}</td>
            <td style="padding: 12px 15px; text-align: center;">{{ $w->departemen }}</td>
            <td style="padding: 12px 15px; text-align: center;">
                <a href="/mykaryawan/edit/{{ $w->kodepegawai}}" class="btn btn-danger btn-sm" style="padding: 8px 15px; border-radius: 25px; background-color: #aa74c5; color: white; border: none;">Edit</a>
                <a href="/mykaryawan/view/{{ $w->kodepegawai}}" class="btn btn-danger btn-sm" style="padding: 8px 15px; border-radius: 25px; background-color: #aa74c5; color: white; border: none;">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>







@endsection
