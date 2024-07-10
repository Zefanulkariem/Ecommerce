<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use App\Models\Kategori;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $request->validate([
            'qty' => 'required|integer|min:1',
        ]);

        $product = Produk::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $quantity = $request->input('qty', 1);

        $cart = Cart::where('id_user', Auth::id())->where('id_produk', $id)->first();

        if ($cart) {
            $cart->qty += $quantity;
            $cart->save();
        } else {
            Cart::create([
                'id_user' => Auth::id(),
                'id_produk' => $id,
                'qty' => $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function index()
    {
        $kategori = Kategori::all();
        $cartItems = Cart::where('id_user', Auth::id())->with('produk')->get();
        return view('cart', compact('cartItems', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::where('id_user', Auth::id())->where('id', $id)->first();

        if ($cart) {
            $cart->qty = $request->qty;
            $cart->save();
            return redirect()->back()->with('success', 'Cart updated successfully!');
        }

        return redirect()->back()->with('error', 'Cart item not found!');
    }

    public function delete($id)
    {
        $cart = Cart::where('id_user', Auth::id())->where('id', $id)->first();

        if ($cart) {
            $cart->delete();
            return redirect()->back()->with('success', 'Cart item removed successfully!');
        }

        return redirect()->back()->with('error', 'Cart item not found!');
    }

    public function clear()
    {
        Cart::where('id_user', Auth::id())->delete();
        return redirect()->back()->with('success', 'All cart items removed successfully!');
    }
}