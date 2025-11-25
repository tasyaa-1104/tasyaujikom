<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk.tambah');
    }

    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;

        // mengubah harga seperti 15.000 menjadi 15000
        $produk->harga = str_replace('.', '', $request->harga);

        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;

        // **sementara diset otomatis biar tidak error**
        $produk->id_kategori = 1;
        $produk->id_toko = 1;

        $produk->save();

        return redirect()->route('admin.produk')->with('success', 'Produk berhasil ditambahkan!');
    }
}
