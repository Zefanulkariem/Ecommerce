<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\Role;


Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ini admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', Role::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('produk', App\Http\Controllers\ProdukController::class);
});

//ini user
Route::get('/', [FrontController::class, 'index']); 
Route::get('error', [FrontController::class, 'error']);
Route::get('shop', [FrontController::class, 'shop'])->name('shop');
Route::get('shop/kategori/{id}', [FrontController::class, 'kategori']); //coba cari paham ini
Route::get('detail_shop{id}', [FrontController::class, 'detail_shop'])->name('detail_shop');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
