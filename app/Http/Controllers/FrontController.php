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
        return view('front.index',compact('kategori', 'produk'));
    }

    public function Kategori($id) //kategori yang ada di web
    {
        $kategori = Kategori::all();

            $produk = Produk::where('id_kategori', $id)->get();
        
        return view('front.shop', compact('produk', 'kategori'));
    }

    public function Search(Request $request)
    {
        $kategori = Kategori::all();

        $search = $request->input('search'); //mencari input seacrh dari view

        $produk = Produk::where('nama_produk', 'LIKE', '%' . $search . '%')->get();
        
        return view('front.shop', compact('produk', 'kategori', 'search'));
    }
    
    public function produk()
    {
        $kategori = Kategori::all();
        return view('produk', compact('kategori'));
    }
    
    public function error()
    {
        $kategori = Kategori::all();
        return view('front.error', compact('kategori'));
    }

    public function shop()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('front.shop', compact('produk', 'kategori'));
    }
    
    //detail-shop
    public function detail_shop($id)
    {
        $kategori = Kategori::all();
        $produk = Produk::findOrFail($id);

        return view('front.detail_shop', compact('produk', 'kategori' )); //kategori
    }

    public function transaksi()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('transaksi', compact('kategori', 'produk'));
    }

}
