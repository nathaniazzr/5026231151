

@extends('template')

@section('content')

<h3 style="color: #333;">Tambah Barang ke Keranjang</h3> <!-- Warna font untuk judul -->
<a href="/keranjang" class="btn" style="background-color: #efb7c0; color:white; border-radius: 10px"> Kembali</a>

<br />
<br />
<!-- Form untuk menambah karyawan -->
<form action="/keranjang/store" method="post">
    {{ csrf_field() }}


    <!-- Kolom Kode Barang -->
    <div class="row">
        <div class="col-3" style="color: #333;">Kode Barang</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="text" name="KodeBarang" required="required" class="form-control">
        </div>
    </div>

    <!-- Kolom Jumlah -->
    <div class="row">
        <div class="col-3" style="color: #333;">Jumlah</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="number" name="Jumlah" required="required" class="form-control">
        </div>
    </div>

    <!-- Kolom Harga -->
    <div class="row">
        <div class="col-3" style="color: #333;">Harga</div> <!-- Warna font untuk label -->
        <div class="col-8">
            <input type="number" name="Harga" required="required" class="form-control">
        </div>
    </div>

    <br />
    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>

@endsection
