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

    /* Styling untuk form tambah barang yang tersembunyi */
    #formTambahBarang {
        display: none; /* Sembunyikan form saat halaman pertama kali dibuka */
        margin-top: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
    }
</style>

<h3>Data Keranjang Belanja</h3>

<a href="/keranjang/tambah"class="btn btn-primary"> + Beli Barang Baru</a>

<br>
<br>

<!-- Tabel untuk menampilkan data keranjang belanja -->
<table class="custom-table">
    <thead>
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($keranjang as $k)
        <tr>
            <td>{{ $k->ID }}</td>
            <td>{{ $k->KodeBarang }}</td>
            <td>{{ $k->Jumlah }}</td>
            <td>{{ number_format($k->Harga, 2, ',', '.') }}</td>
            <td>{{ number_format($k->Jumlah * $k->Harga, 2, ',', '.') }}</td>
            <td>
                <!-- Tombol Beli yang akan memunculkan form untuk tambah barang -->

                <a href="/keranjang/hapus/{{ $k->ID }}" class="btn btn-danger btn-sm" style="padding: 8px 15px; border-radius: 25px; background-color: #aa74c5; color: white; border: none;">Batal</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- <!-- Form untuk menambah barang, yang akan muncul ketika tombol beli diklik -->
<div id="formTambahBarang">
    <h4>Tambah Barang ke Keranjang</h4>
    <form action="/keranjang/store" method="post">
        {{ csrf_field() }}
        <input type="hidden" id="kodePembelian" name="KodePembelian" value=""> <!-- Menyimpan Kode Pembelian -->
        <div class="row">
            <div class="col-3">Kode Barang</div>
            <div class="col-8">
                <input type="text" name="KodeBarang" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">Jumlah</div>
            <div class="col-8">
                <input type="number" name="Jumlah" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">Harga</div>
            <div class="col-8">
                <input type="number" name="Harga" required="required" class="form-control">
            </div>
        </div>
        <br />
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
</div>

<!-- Script untuk menampilkan form ketika tombol Beli diklik -->
<script>
    // Ambil semua tombol beli di tabel
    const beliButtons = document.querySelectorAll('.beli');

    // Tambahkan event listener pada setiap tombol Beli
    beliButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Ambil ID pembelian dari data-id tombol
            const kodePembelian = this.getAttribute('data-id');

            // Set value input hidden di form
            document.getElementById('kodePembelian').value = kodePembelian;

            // Tampilkan form tambah barang
            document.getElementById('formTambahBarang').style.display = 'block';
        });
    });
</script> --}}

<!-- Pagination untuk keranjang belanja -->
{{-- <div class="pagination justify-content-center" style="margin-top: 20px;">
    {{ $keranjang->links('pagination::bootstrap-4') }}
</div> --}}

@endsection

