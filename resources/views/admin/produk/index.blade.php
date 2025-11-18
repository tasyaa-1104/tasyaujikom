<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>

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
            margin-bottom: 20px;
        }

        /* BUTTON */
        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-add {
            background: #10b981;
            color: white;
        }

        .btn-edit {
            background: #3b82f6;
            color: white;
        }

        .btn-delete {
            background: #ef4444;
            color: white;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        }

        th, td {
            padding: 14px;
            font-size: 15px;
        }

        th {
            background: #4f46e5;
            color: white;
            text-align: left;
        }

        tr:nth-child(even) {
            background: #f9fafb;
        }

        img.product-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 6px;
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

        <div class="title">Data Produk</div>

        <a href="{{ route('admin.produk.create') }}">
            <button class="btn btn-add">+ Tambah Produk</button>
        </a>

        <br><br>

        <!-- TABLE -->
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($produk as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>
                        <img src="{{ asset('storage/produk/' . $p->gambar) }}" class="product-img">
                    </td>

                    <td>{{ $p->nama }}</td>
                    <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                    <td>{{ $p->kategori }}</td>
                    <td>{{ $p->stok }}</td>

                    <td>
                        <a href="{{ route('admin.produk.edit', $p->id) }}">
                            <button class="btn btn-edit">Edit</button>
                        </a>

                        <form action="{{ route('admin.produk.delete', $p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-delete" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</body>
</html>
