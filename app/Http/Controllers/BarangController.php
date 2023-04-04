<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $barang = Barang::where('nama_barang','LIKE','%' .$request->search. '%')
                        ->orWhere('kode_barang','LIKE','%' .$request->search. '%')
                        ->orWhere('kategori_barang','LIKE','%' .$request->search. '%')->get();
        }else {
            $barang = Barang::all();
        } 
        return view('barang.index', compact(['barang']));
    }
    
    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        Barang::create($request->except(['_token','submit']));
        return redirect('/barang');
    }

    public function edit($id_barang)
    {
        $barang = Barang::find($id_barang);
        return view('barang.edit', compact(['barang']));
    }

    public function update($id_barang, Request $request)
    {
        $barang = Barang::find($id_barang);
        $barang->update($request->except(['_token','submit']));
        return redirect('/barang');
    }

    public function destroy($id_barang)
    {
        $barang = Barang::find($id_barang);
        $barang->delete();
        return redirect('/barang');
    }
}
