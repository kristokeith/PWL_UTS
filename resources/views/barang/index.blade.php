@extends('layouts.master')

@section('content')
    <div class="container" >
        <h1 class="text-center">CRUD Mengelola Barang</h1>
        <h6 class="text-center">By: Keith Cahyawiyanata</h6>
        <h6 class="text-center">TI2I - 12 - 2141720217</h6>
        <br>
        <div class="text-center">
            <a href="/barang/create" class="btn btn-warning">Add Barang</a>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-md-6">
                <form action="/barang">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Nama / Kategori / Kode Barang" name="search">
                        <span class="btn btn-warning" type="submit">Search</span>
                      </div>
                </form>
            </div>
        </div>
        <table class="table table-dark table-hover table-bordered border-warning">
            <tr>
                <th>ID Barang</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori Barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Action</th>
            </tr>
            @foreach ($barang as $b)
                <tr>
                    <td>{{$b->id_barang}}</td>
                    <td>{{$b->kode_barang}}</td>
                    <td>{{$b->nama_barang}}</td>
                    <td>{{$b->kategori_barang}}</td>
                    <td>{{$b->harga}}</td>
                    <td>{{$b->qty}}</td>
                    <td>
                        <div class="btn-group-vertical">
                            <a class="btn btn-success" href="/barang/{{$b->id_barang}}/edit">Edit</a>
                            <form action="/barang/{{$b->id_barang}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection