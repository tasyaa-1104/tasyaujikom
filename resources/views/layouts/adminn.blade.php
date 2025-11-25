<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { margin: 0; font-family: 'Poppins', sans-serif; background: #eef1f5; }
        .sidebar { width: 240px; background: #1f2937; height: 100vh; position: fixed; padding: 20px; color: white; }
        .sidebar h2 { font-size: 22px; font-weight: 700; margin-bottom: 25px; }
        .menu a { text-decoration: none; color: #e5e7eb; display: block; padding: 12px 15px; margin-bottom: 8px; border-radius: 6px; font-size: 15px; }
        .menu a:hover, .menu a.active { background: #4f46e5; color: white; }
        .menu a.logout { background:#dc2626; color:white; }
        .content { margin-left: 260px; padding: 25px; }
        .title { font-size: 26px; font-weight: 600; margin-bottom: 10px; }

        /* Card & Form Default */
        .card { background: white; padding: 25px; border-radius: 12px; margin-top: 20px; width: 100%; box-shadow: 0 4px 20px rgba(0,0,0,0.06); }

        .form-group { margin-bottom: 18px; }
        label { font-weight: 600; font-size: 15px; }
        input, textarea, select { width: 100%; padding: 12px; margin-top: 6px; border-radius: 6px; border: 1px solid #d1d5db; font-size: 15px; }
        textarea { resize: vertical; height: 100px; }

        .btn-submit { padding: 12px 20px; background: #10b981; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; font-weight: 600; }
        .btn-back { padding: 12px 20px; background: #6b7280; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; font-weight: 600; margin-right: 10px; }

        /* Table */
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background:white; border-radius:12px; overflow:hidden; }
        th, td { padding: 12px 15px; border-bottom: 1px solid #ddd; font-size:15px; }
        th { background: #4f46e5; color:white; }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <div class="menu">
            <a href="{{ route('admin.das.index') }}" class="@yield('menu-dashboard')">📊 Dashboard</a>
            <a href="{{ route('admin.toko.index') }}" class="@yield('menu-toko')">🏬 Toko</a>
            <a href="{{ route('admin.produk.index') }}" class="@yield('menu-produk')">📦 Produk</a>
            <a href="#" class="@yield('menu-kategori')">📁 Kategori</a>
            <a href="#" class="@yield('menu-pengguna')">👤 Pengguna</a>
            <a href="/logout" class="logout">🚪 Logout</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <p class="title">@yield('title')</p>

        @yield('content')
    </div>

</body>
</html>
