<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;

class FrontController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('index',compact('kategori', 'produk'));
    }

    public function kategori($id)
    {
        return $this->produkByKategori($id);
    }

    public function produkByKategori($id)
    {
        $kategori = Kategori::all();
        $produk = Produk::where('id_kategori', $id)->get();
        return view('shop', compact('produk', 'kategori'));
    }

    public function produk()
    {
        return view('produk');
    }

    public function error()
    {
        return view('error');
    }

    public function shop()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('shop', compact('produk', 'kategori'));
    }
    
    public function detail_shop($id)
    {
        $kategori = kategori::findOrFail($id);
        $produk = Produk::findOrFail($id);
        return view('detail_shop', compact('produk', 'kategori'));
    }

}
