<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        $title = 'Hapus Akun User!';
        $text = "Apakah kamu yakin ingin menghapusnya?";
        confirmDelete($title, $text);
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_produk'  => 'required',
            'deskripsi'  => 'required',
            'stok_produk'  => 'required',
            'harga'  => 'required',
            'id_kategori'  => 'required',
            'cover'  => 'required',
        ]);

        $produk = new Produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->stok_produk = $request->stok_produk;
        $produk->harga = $request->harga;
        $produk->id_kategori = $request->id_kategori;

        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9000) . $img->getClientOriginalName();
            $img->move('image/produk', $name);
            $produk->cover= $name;
        }

        $produk->save();
        Alert::success('Success Title', "Data Berhasil Di Tambah")->autoClose(1000);
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kategori = Kategori::all();
        $produk = Produk::findOrfail($id);
        return view('admin.produk.show', compact('produk', 'kategori'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $produk = Produk::findOrfail($id);
        return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'stok_produk' => 'required',
            'harga' => 'required',
            'id_kategori' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->stok_produk = $request->stok_produk;
        $produk->harga = $request->harga;
        $produk->id_kategori = $request->id_kategori;

        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9000) . $img->getClientOriginalName();
            $img->move('image/produk', $name);
            $produk->cover= $name;
        }

        $produk->save();
        Alert::success('Success Title', "Data Berhasil Di Edit")->autoClose(1000);
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        
        $produk->delete();
        Alert::success("Delete", "Data Berhasil Di Hapus")->autoClose(1000);
        return redirect()->route('produk.index');
    }
}
