<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Toko</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #eef1f5;
        }

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
            margin-bottom: 25px;
        }

        .menu a {
            text-decoration: none;
            color: #e5e7eb;
            display: block;
            padding: 12px 15px;
            margin-bottom: 10px;
            border-radius: 6px;
        }

        .menu a.active,
        .menu a:hover {
            background: #4f46e5;
            color: white;
        }

        .content {
            margin-left: 260px;
            padding: 25px;
        }

        .title {
            font-size: 26px;
            font-weight: 600;
        }

        .btn-tambah {
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 20px;
            display: inline-block;
        }

        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
            margin-top: 15px;
            border-radius: 10px;
            overflow: hidden;
        }

        table th {
            background: #374151;
            color: white;
            padding: 12px;
        }

        table td {
            padding: 12px;
            background: white;
        }

        img {
            width: 70px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        .btn-edit {
            background: #facc15;
            padding: 6px 10px;
            border-radius: 5px;
            color: #000;
            text-decoration: none;
            margin-right: 5px;
        }

        .btn-hapus {
            background: #e11d48;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>

        <div class="menu">
            <a href="{{ route('admin.dashboard') }}">📊 Dashboard</a>
            <a href="{{ route('admin.produk') }}">🛒 Produk</a>
            <a href="{{ route('admin.toko') }}" class="active">🏬 Toko</a>
        </div>
    </div>

    <div class="content">

        <div class="title">Daftar Toko</div>

        <a href="{{ route('admin.toko.tambah') }}" class="btn-tambah">+ Tambah Toko</a>

        <table>
            <tr>
                <th>Gambar</th>
                <th>Nama Toko</th>
                <th>Pemilik</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>

            @foreach($toko as $t)
            <tr>
                <td>
                    <img src="{{ asset('storage/' . $t->gambar) }}" alt="gambar toko">
                </td>

                <td>{{ $t->nama_toko }}</td>
                <td>{{ $t->pemilik ?? 'admin' }}</td>
                <td>{{ $t->telepon }}</td>

                <td>
                    <a href="{{ route('admin.toko.edit', $t->id) }}" class="btn-edit">Edit</a>

                    <a href="{{ route('admin.toko.hapus', $t->id) }}"
                       class="btn-hapus"
                       onclick="return confirm('Hapus toko ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>

</body>
</html>
