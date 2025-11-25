{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Toko</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { margin: 0; font-family: 'Poppins', sans-serif; background: #eef1f5; }
        .sidebar { width: 240px; background: #1f2937; height: 100vh; position: fixed; padding: 20px; color: white; }
        .sidebar h2 { font-size: 22px; font-weight: 700; margin-bottom: 25px; }
        .menu a { text-decoration: none; color: #e5e7eb; display: block; padding: 12px 15px; margin-bottom: 8px; border-radius: 6px; font-size: 15px; }
        .menu a:hover, .menu a.active { background: #4f46e5; color: white; }
        .content { margin-left: 260px; padding: 25px; }
        .title { font-size: 26px; font-weight: 600; }
        .card { background: white; padding: 25px; border-radius: 12px; margin-top: 25px; width: 100%; box-shadow: 0 4px 20px rgba(0,0,0,0.06); }
        .form-group { margin-bottom: 18px; }
        label { font-weight: 600; font-size: 15px; }
        input, textarea, select { width: 100%; padding: 12px; margin-top: 6px; border-radius: 6px; border: 1px solid #d1d5db; font-size: 15px; }
        textarea { resize: vertical; height: 100px; }
        .btn-submit { padding: 12px 20px; background: #10b981; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; font-weight: 600; }
        .btn-back { padding: 12px 20px; background: #6b7280; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; font-weight: 600; margin-right: 10px; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <div class="menu">
            <a href="{{ route('admin.das.index') }}">📊 Dashboard</a>
            <a href="{{ route('admin.toko.index') }}" class="active">🛒 Toko</a>
            <a href="{{ route('admin.produk.create') }}">📦 Produk</a>
            <a href="#">📁 Kategori</a>
            <a href="#">👤 Pengguna</a>
            <a href="/logout" style="background:#dc2626;">🚪 Logout</a>
        </div>
    </div>

    <div class="content">
        <div class="title">Tambah Toko</div>

        <div class="card">
            🔐 <small style="color:#6b7280;">Isi data toko dengan lengkap</small><br><br>

            <form action="{{ route('admin.toko.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Nama Toko</label>
                    <input type="text" name="nama_toko" required>
                </div>

                <div class="form-group">
                    <label>Kontak Toko</label>
                    <input type="text" name="kontak" required>
                </div>

                <div class="form-group">
                    <label>Pemilik Toko (User)</label>
                    <select name="pemilik" required>
                        <option value="">Pilih Pemilik</option>
                        @foreach($users as $u)
                            <option value="{{ $u->id }}">{{  $u->name ?? '-' }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Gambar Toko</label>
                    <input type="file" name="gambar" accept="image/*">
                    <small style="color:#6b7280;">Format: JPG, JPEG, PNG — Max 2MB</small>
                </div>

                <button type="button" onclick="window.location='{{ route('admin.toko.index') }}'" class="btn-back">Kembali</button>
                <button type="submit" class="btn-submit">Simpan</button>

            </form>
        </div>
    </div>

</body>
</html> --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Toko</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { margin: 0; font-family: 'Poppins', sans-serif; background: #eef1f5; }
        .sidebar { width: 240px; background: #1f2937; height: 100vh; position: fixed; padding: 20px; color: white; }
        .sidebar h2 { font-size: 22px; font-weight: 700; margin-bottom: 25px; }
        .menu a { text-decoration: none; color: #e5e7eb; display: block; padding: 12px 15px; margin-bottom: 8px; border-radius: 6px; font-size: 15px; }
        .menu a:hover, .menu a.active { background: #4f46e5; color: white; }
        .content { margin-left: 260px; padding: 25px; }
        .title { font-size: 26px; font-weight: 600; margin-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background:white; border-radius:12px; overflow:hidden; }
        th, td { padding: 12px 15px; border-bottom: 1px solid #ddd; font-size:15px; }
        th { background: #4f46e5; color:white; }
        img { border-radius: 8px; }
        .btn-add { display:inline-block; padding:10px 16px; background:#10b981; color:white; border-radius:6px; font-weight:600; text-decoration:none; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <div class="menu">
            <a href="{{ route('admin.das.index') }}">📊 Dashboard</a>
            <a href="{{ route('admin.toko.index') }}" class="active">🏬 Toko</a>
            <a href="{{ route('admin.produk.create') }}">📦 Produk</a>
            <a href="#">📁 Kategori</a>
            <a href="#">👤 Pengguna</a>
            <a href="/logout" style="background:#dc2626;">🚪 Logout</a>
        </div>
    </div>

    <div class="content">
        <div class="title">Daftar Toko</div>
        <a href="{{ route('admin.toko.create') }}" class="btn-add">+ Tambah Toko</a>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Toko</th>
                <th>Pemilik</th>
                <th>Kontak</th>
                <th>Gambar</th>
            </tr>

            @foreach ($data as $index => $item)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    {{-- @if($item->gambar)
                        <img src="{{ asset('storage/'.$item->gambar) }}" width="60">
                    @else
                        Tidak ada
                    @endif --}}
                </td>
            </tr>
            @endforeach

        </table>
    </div>

</body>
</html>
