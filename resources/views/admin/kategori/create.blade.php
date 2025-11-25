<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { margin: 0; font-family: 'Poppins', sans-serif; background: #eef1f5; }
        .sidebar { width: 240px; background: #1f2937; height: 100vh; position: fixed; padding: 20px; color: white; }
        .sidebar h2 { font-size: 22px; font-weight: 700; margin-bottom: 25px; }
        .menu a { text-decoration: none; color: #e5e7eb; display: block; padding: 12px 15px; margin-bottom: 8px; border-radius: 6px; font-size: 15px; }
        .menu a:hover, .menu a.active { background: #4f46e5; color: white; }

        /* === FULL WHITE CONTENT === */
        .content {
            margin-left: 240px;
            padding: 40px 60px;
            background:white;
            min-height: 100vh;
        }

        .title { font-size: 32px; font-weight: 700; margin-bottom: 10px; }

        /* Tombol Kecil */
        .btn-back-list {
            display:inline-block;
            padding:8px 12px;
            background:#2563eb;
            color:white;
            border-radius:6px;
            font-weight:600;
            text-decoration:none;
            margin-bottom:20px;
        }

        /* Form Input */
        label { font-weight:600; font-size:18px; display:block; margin-bottom:6px; }
        input {
            width:40%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:15px;
            margin-bottom:16px;
        }

        .btn-submit {
            padding:10px 18px;
            background:#2563eb;
            color:white;
            border:none;
            border-radius:6px;
            cursor:pointer;
            font-weight:600;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>

    <div class="menu">
        <a href="{{ route('admin.das.index') }}">📊 Dashboard</a>
        <a href="{{ route('admin.toko.index') }}">🏬 Toko</a>
        <a href="{{ route('admin.kategori.create') }}" class="active">📁 Kategori</a>
        <a href="{{ route('admin.produk.create') }}">📦 Produk</a>
        <a href="#">👤 Pengguna</a>
        <a href="/logout" style="background:#dc2626;">🚪 Logout</a>
    </div>
</div>

<div class="content">
    <div class="title">Tambah Kategori</div>

    <a href="{{ route('admin.kategori.create') }}" class="btn-back-list">← Kembali</a>

    <form action="{{ route('admin.kategori.store') }}" method="POST">
        @csrf
        <label>Nama Kategori:</label>
        <input type="text" name="nama_kategori" placeholder="Masukkan nama kategori..." required>

        <br>
        <button type="submit" class="btn-submit">Simpan</button>
    </form>
</div>

</body>
</html>
