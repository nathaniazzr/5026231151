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

<h3>Data Mahasiswa</h3>



<a href="/mahasiswa/tambah" class="btn btn-primary mb-3" style="border-radius: 25px; padding: 10px 20px; font-weight: bold;">+ Tambah Data</a>
<br>

<table class="custom-table">
    <thead>
        <tr>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">NRP</th>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Nama</th>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Jurusan</th>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">IPK</th>
            <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $n)
        <tr>
            <td style="padding: 12px 15px; text-align: center;">{{ $n->NRP }}</td>
            <td style="padding: 12px 15px; text-align: center;">{{ $n->Nama }}</td>
            <td style="padding: 12px 15px; text-align: center;">{{ $n->Jurusan }}</td>
            <td style="padding: 12px 15px; text-align: center;">{{ $n->IPK }}</td>
            <td style="padding: 12px 15px; text-align: center;">
                <a href="/mahasiswa/edit/{{ $n->NRP }}" class="btn btn-danger btn-sm" style="padding: 8px 15px; border-radius: 25px; background-color: #aa74c5; color: white; border: none;">View</a>
                <a href="/mahasiswa/hapus/{{ $n->NRP }}" class="btn btn-danger btn-sm" style="padding: 8px 15px; border-radius: 25px; background-color: #aa74c5; color: white; border: none;">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>





<div class="pagination justify-content-center" style="margin-top: 20px;">
    {{ $mahasiswa->links('pagination::bootstrap-4') }}
</div>

@endsection
