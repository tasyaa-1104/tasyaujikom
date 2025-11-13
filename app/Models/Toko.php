<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'tokos';

    protected $fillable = [
        'nama_toko',
        'deskripsi',
        'gambar',
        'kontak_toko',
        'alamat',
        'id_user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function produks()
    {
        return $this->hasMany(Produk::class, 'id_toko');
    }
}
