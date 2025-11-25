<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>

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
            color: #fff;
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

        .btn-add {
            background: #10b981;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 600;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        }

        th,
        td {
            padding: 14px;
            font-size: 15px;
        }

        th {
            background: #1f2937;
            color: white;
            text-align: left;
        }

        tr:nth-child(even) {
            background: #f9fafb;
        }

        .btn-edit {
            background: #facc15;
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-delete {
            background: #ef4444;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
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
            <a href="{{ route('admin.das.index') }}">📊 Dashboard</a>
            <a href="{{ route('admin.produk') }}" class="active">🛒 Produk</a>
            <a href="{{ route('admin.toko.index') }}">🏬 Toko</a>
            <a href="#">📁 Kategori</a>
            <a href="#">👤 Pengguna</a>
            <a href="/logout" style="background:#dc2626; color:white;">🚪 Logout</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="title">Daftar Produk</div>

        <a href="{{ route('admin.produk.create') }}">
            <button class="btn-add">+ Tambah Produk</button>
        </a>

        <br><br>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($produk as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ $p->kategori->nama ?? '-' }}</td>
                    <td>Rp {{ number_format($p->harga) }}</td>
                    <td>{{ $p->stok }}</td>

                    <td>
                        @if ($p->gambar)
                            <img src="{{ asset('storage/produk/' . $p->gambar) }}" class="product-img">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.produk.edit', $p->id) }}">
                            <button class="btn-edit">Edit</button>
                        </a>

                        <form action="{{ route('admin.produk.delete', $p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn-delete" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="7" style="text-align:center; color:gray;">Belum ada data produk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>

</body>

</html>
