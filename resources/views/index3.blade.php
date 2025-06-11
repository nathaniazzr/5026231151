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
    <h3>Data Mouse</h3>

    <a href="/mouse/tambah" class="btn btn-primary mb-3" style="border-radius: 25px; padding: 10px 20px; font-weight: bold;">+ Tambah Mouse Baru</a>

    <table class="custom-table" style="width: 100%; border-collapse: collapse; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <thead>
            <tr>
                <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">ID</th>
                <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Merk Mouse</th>
                <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Harga Mouse</th>
                <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Tersedia</th>
                <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Berat</th>
                <th style="padding: 12px 15px; text-align: center; background-color: #5c6bc0; color: white;">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mouse as $m)
            <tr>
                <td style="padding: 12px 15px; text-align: center;">{{ $m->ID }}</td>
                <td style="padding: 12px 15px; text-align: center;">{{ $m->Merk_Mouse }}</td>
                <td style="padding: 12px 15px; text-align: center;">{{ number_format($m->Harga_Mouse, 2, ',', '.') }}</td>
                <td style="padding: 12px 15px; text-align: center;">{{ $m->Tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                <td style="padding: 12px 15px; text-align: center;">{{ $m->Berat }}</td>
                <td style="text-align: center;"><a href="/mouse/edit/{{ $m->ID }}" class="btn btn-warning btn-sm" style="padding: 8px 15px; border-radius: 25px; background-color: #ccafee; color: white; border: none;">Edit</a>
                    <a href="/mouse/hapus/{{ $m->ID }}" class="btn btn-danger btn-sm" style="padding: 8px 15px; border-radius: 25px; background-color: #aa74c5; color: white; border: none;">Hapus</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination justify-content-center" style="margin-top: 20px;">
        {{ $mouse->links('pagination::bootstrap-4') }}
    </div>
@endsection
