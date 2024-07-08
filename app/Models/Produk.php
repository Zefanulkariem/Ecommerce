<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'deskripsi', 'stok_produk', 'harga', 'id_kategori', 'cover'];

    public function kategori()
    {
        return $this->BelongsTo(Kategori::class, 'id_kategori');
    }
}
