<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class FrontController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('index',compact('kategori'));
    }
    public function kategori()
    {
        return view('kategori');
    }

}
