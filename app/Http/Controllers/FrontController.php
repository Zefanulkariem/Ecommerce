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
    
    //kategoriByID
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
        $kategori = Kategori::all();
        return view('produk', compact('kategori'));
    }
    
    public function error()
    {
        $kategori = Kategori::all();
        return view('error', compact('kategori'));
    }
    
    public function order()
    {
        $kategori = Kategori::all();
        return view('order', compact('kategori'));
    }

    public function shop()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('shop', compact('produk', 'kategori'));
    }
    
    //detail-shop
    public function detail_shop($id)
    {
        $kategori = Kategori::all();
        $produk = Produk::findOrFail($id);
        // $kategori = Kategori::find($produk->kategori_id);

        //dd($produk, $kategori);

        return view('detail_shop', compact('produk', 'kategori' )); //kategori
    }

}
