<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Kategori;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $order = Order::all(); 
        $keranjang = Cart::all();
        $kategori = Kategori::all();
        return view('transaksi', compact('order', 'kategori', 'keranjang'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'negara' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
        ]);


        $itemKeranjang = Cart::where('id_user', Auth::id())->get(); // Ambil data di keranjang masing2 pengguna
    
        if ($itemKeranjang->isEmpty()) { // isEmpty func bawaan laravel
            return redirect()->back()->with('error', 'Keranjang Anda kosong!');
        }

        
        $totalHargaProduk = $itemKeranjang->sum(function($data) {
            return $data->qty * $data->produk->harga; // menghitung total harga pesanan
        });


        foreach ($itemKeranjang as $data) {
            // tempat menyimpan data order dari view
            Order::create([
                'id_user' => Auth::id(),
                'nama_lengkap' => $request->input('nama_lengkap'), //untuk menerima input view ke controller (dalam ORM)
                'alamat' => $request->input('alamat'),
                'kota' => $request->input('kota'),
                'negara' => $request->input('negara'),
                'no_telp' => $request->input('no_telp'),
                'id_produk' => $data->id_produk,
                'quantity' => $data->qty,
                'total' => $data->qty * $data->produk->harga, // Menggunakan nilai yang sudah dihitung
            ]);
        }


        Cart::where('id_user', Auth::id())->delete(); // cart bakal dihapus setelah order barang

        return redirect()->route('transaksi.success')->with('success', 'Pesanan berhasil dibuat!'); // ke halaman sukses
    }
}
