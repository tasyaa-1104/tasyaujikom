<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Ambil semua data produk dari database
        $produk = produk::with(['kategori', 'toko'])->get();

        return view('admin.produk.index', compact('produk'));
    }
}
