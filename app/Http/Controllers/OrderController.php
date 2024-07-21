<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use App\Models\Kategori;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        $keranjangItem = Cart::where('id_user', Auth::id())->with('produk')->get();
        return view('front.order', compact('keranjangItem', 'kategori'));
    }

    public function orderSukses(Order $order)
    {
        return view('front.orderSukses', compact('order'));
    }

    public function tempatOrder(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kota' => 'required|email|max:255',
            'negara' => 'required|string|max:15',
            'no_telp' => 'required|integer|max:32',
        ]);


        $keranjangItem = Cart::where('id_user', Auth::id())->with('produk')->get();


        if ($keranjangItem->isEmpty()) {
            return redirect()->route('home')->with('error', 'Cart is empty!');
        }


        $total = $keranjangItem->sum(function($item) {
            return $item->produk->harga * $item->qty;
        });

        $order = Order::create([ //ngisi record order
            'id_user' => Auth::id(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'total' => $total,
        ]);

        foreach ($keranjangItem as $data) {
            
            if ($data->produk) { //bakal ngecek apakah data kranjnag ada/ga
                OrderItem::create([
                    'order_id' => $order->id,
                    'id_produk' => $item->produk->id,
                    'qty' => $item->qty,
                    'price' => $item->produk->harga,
                ]);
            } else {
                
                return redirect()->route('home')->with('error', 'Product not found!'); //error handling
            }
        }

        // Clear the cart for the authenticated user
        Cart::where('id_user', Auth::id())->delete();

        // Redirect to order confirmation page with order details
        return redirect()->route('konfirmasiOrder', ['order' => $order]);
    }
}
