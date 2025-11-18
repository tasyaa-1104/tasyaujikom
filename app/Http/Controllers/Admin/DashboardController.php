<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // contoh data
        $data = [
            'total_produk' => 120,
            'total_kategori' => 15,
            'total_pengguna' => 54,
            'total_toko' => 8,
        ];

        return view('admin.das.index', $data);
    }
}
