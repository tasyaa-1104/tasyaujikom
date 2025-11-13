<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = [
        'nama_produk',
        'id_kategori',
        'harga',
        'stok',
        'deskripsi',
        'tanggal_upload',
        'id_toko'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'id_toko');
    }

    public function gambar_produks()
    {
        return $this->hasMany(GambarProduk::class, 'id_produk');
    }
}
