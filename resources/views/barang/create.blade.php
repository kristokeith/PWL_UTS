@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Create Barang</h1>
        <form action="/barang/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kodebarang" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" name="kode_barang" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="kategoribarang" class="form-label">Kategori Barang</label>
                <select name="kategori_barang" class="form-select">
                    <option value="">Pilih Kategori Barang</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Snack">Snack</option>
                    <option value="Obat">Obat</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="hargabarang" class="form-label">Harga Barang</label>
                <input type="integer" class="form-control" name="harga" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label">Quantity Barang</label>
                <input type="integer" class="form-control" name="qty" aria-describedby="emailHelp">
            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-success">
        </form>
    </div>
@endsection