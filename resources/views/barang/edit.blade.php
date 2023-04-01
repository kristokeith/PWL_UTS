@extends('layouts.master')

@section('content')
    <div class="container"></div>
        <h1>Edit Data</h1>

        <form action="/barang/{{$barang->id_barang}}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="kodebarang" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" name="kode_barang" value="{{$barang->kode_barang}}">
            </div>
            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="{{$barang->nama_barang}}">
            </div>
            <div class="mb-3">
                <label for="kategoribarang" class="form-label">Kategori Barang</label>
                <select name="kategori_barang" class="form-select">
                    <option value="">Pilih Kategori Barang</option>
                    <option value="Makanan" @if($barang->kategori_barang == "Makanan") selected @endif>Makanan</option>
                    <option value="Minuman" @if($barang->kategori_barang == "Minuman") selected @endif>Minuman</option>
                    <option value="Snack" @if($barang->kategori_barang == "Snack") selected @endif>Snack</option>
                    <option value="Obat" @if($barang->kategori_barang == "Obat") selected @endif>Obat</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="hargabarang" class="form-label">Harga Barang</label>
                <input type="integer" class="form-control" name="harga" value="{{$barang->harga}}">
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label">Quantity Barang</label>
                <input type="integer" class="form-control" name="qty" value="{{$barang->qty}}">
            </div>
            <input type="submit" name="submit" value="Update" class="btn btn-success">
        </form>
    </div>
@endsection