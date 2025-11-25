<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\User;

class TokoController extends Controller
{
   public function index()
    {
        $data = Toko::with('user')->get();
        return view('admin.toko.index', ['data' => $data]);
    }


    public function create()
    {
        $users = User::all(); // untuk pilih pemilik toko (user)
        return view('admin.toko.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required',
            'kontak' => 'required',
            'pemilik' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('toko', 'public');
        }

        Toko::create([
            'nama_toko' => $request->nama_toko,
            'kontak' => $request->kontak,
            'id_user' => $request->pemilik,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.toko.index')->with('success', 'Toko berhasil ditambahkan!');
    }
}
