<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller
{
    public function index()
    {
        $toko = Toko::all();
        return view('admin.toko.index', compact('toko'));
    }

    public function create()
    {
        return view('admin.toko.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required',
            'pemilik'   => 'required',
            'kontak'    => 'required',
        ]);

        Toko::create($request->all());

        return redirect()->route('admin.toko')->with('success', 'Toko berhasil ditambahkan');
    }
}
