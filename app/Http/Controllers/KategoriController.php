<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        $title = 'Hapus Akun User!';
        $text = "Apakah kamu yakin ingin menghapusnya?";
        confirmDelete($title, $text);
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kategori' => 'required|unique:kategoris', //edit
            'cover' => 'required',

        ]);

        $kategori = new Kategori;
        $kategori->kategori = $request->kategori;
        $kategori->cover = $request->cover;

        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9000) . $img->getClientOriginalName();
            $img->move('image/kategori', $name);
            $kategori->cover= $name;
        }

        $kategori->save();
        Alert::success('Success Title', "Data Berhasil Di Tambah")->autoClose(1000);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'kategori' => 'required|unique:kategoris,kategori,' . $id, //edit
            'cover' => 'required',

        ]);

        $kategori = Kategori::findOrfail($id);
        $kategori->kategori = $request->kategori;
        $kategori->cover = $request->cover;

        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9000) . $img->getClientOriginalName();
            $img->move('image/kategori', $name);
            $kategori->cover= $name;
        }

        $kategori->save();
        Alert::success('Success Title', "Data Berhasil Di Edit")->autoClose(1000);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        
        $kategori->delete();
        Alert::success("Delete", "Data Berhasil Di Hapus")->autoClose(1000);
        return redirect()->route('kategori.index');
    }
}
