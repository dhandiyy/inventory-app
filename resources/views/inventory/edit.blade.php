@extends('layouts.template')
@section('konten')

<form action='{{url ('data/'.$barang->id)}}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    {{ $barang->id}}
                </div>
            </div>

            <div class="mb-3 row">
                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='namaBarang' value="{{$barang->name}}" id="namaBarang">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="brand" class="col-sm-2 col-form-label">Brand/Merek</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='brand' value="{{$barang->brand}}" id="brand">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='jumlah' value="{{$barang->jumlah}}" id="jumlah">
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
