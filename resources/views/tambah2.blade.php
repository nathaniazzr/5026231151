@extends('template')

@section('content')
    <h3>Data Mouse</h3>

    <a href="/mouse" class="btn btn-info"> Kembali</a>

    <br/>
    <br/>

    <form action="/mouse/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Merk Mouse
            </div>
            <div class="col-8">
                <input type="text" name="merk_mouse" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Harga Mouse
            </div>
            <div class="col-8">
                <input type="number" name="harga_mouse" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-8">
                <input type="text" name="tersedia" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type="text" name="berat" required="required" class="form-control">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
