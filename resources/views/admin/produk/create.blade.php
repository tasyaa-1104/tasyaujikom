<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #eef1f5;
        }

        /* SIDEBAR */
        .sidebar {
            width: 240px;
            background: #1f2937;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 20px;
            color: white;
        }

        .sidebar h2 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .menu a {
            text-decoration: none;
            color: #e5e7eb;
            display: block;
            padding: 12px 15px;
            margin-bottom: 8px;
            border-radius: 6px;
            font-size: 15px;
        }

        .menu a:hover,
        .menu a.active {
            background: #4f46e5;
            color: white;
        }

        /* CONTENT */
        .content {
            margin-left: 260px;
            padding: 25px;
        }

        .title {
            font-size: 26px;
            font-weight: 600;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-top: 25px;
            width: 100%;
            max-width: 700px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            font-weight: 600;
            font-size: 15px;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        .btn-submit {
            padding: 12px 20px;
            background: #10b981;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-back {
            padding: 12px 20px;
            background: #6b7280;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Admin Panel</h2>

        <div class="menu">
            <a href="{{ route('admin.dashboard') }}">📊 Dashboard</a>
            <a href="{{ route('admin.produk') }}" class="active">🛒 Produk</a>
            <a href="#">🏬 Toko</a>
            <a href="#">📁 Kategori</a>
            <a href="#">👤 Pengguna</a>
            <a href="/logout" style="background:#dc2626;">🚪 Logout</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="title">Tambah Produk</div>

        <div class="card">

            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" required>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" required>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" required>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Kursi">Kursi</option>
                        <option value="Meja">Meja</option>
                        <option value="Lemari">Lemari</option>
                        <option value="Aksesoris">Aksesoris</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi"></textarea>
                </div>

                <div class="form-group">
                    <label>Foto Produk</label>
                    <input type="file" name="gambar" required>
                </div>

                <button type="button" onclick="window.location='{{ route('admin.produk') }}'" class="btn-back">Kembali</button>
                <button type="submit" class="btn-submit">Simpan Produk</button>

            </form>
        </div>

    </div>

</body>
</html>
