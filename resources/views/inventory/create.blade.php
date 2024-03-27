@extends('layouts.template')
@section('konten')

<form action="/data/create" method='post'>
    @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='namaBarang' id="namaBarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="brand" class="col-sm-2 col-form-label">Brand/Merek</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='brand' id="brand">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='jumlah' id="jumlah">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="temp" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
</form>
@endsection
<a href='{{url ('data')}}' class = "btn btn-secondary"><< kembali</a>
