@extends('layouts.template')
@section('konten')

<!--DATA-->
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href="{{ route('create') }}" class="btn btn-primary">+ Tambah Data</a>
        </div>
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Nama Barang</th>
                    <th class="col-md-4">Brand/Merek</th>
                    <th class="col-md-2">Jumlah</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->brand}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>
                        <a href='{{url('data/'.$item->id.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                        <form class ='d-inline' action = "{{url('data/'.$item->id) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
        {{$data->links()}}
    </div>
    <!--DATA-->
@endsection