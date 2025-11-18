<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f5f6fa; }

        .sidebar {
            width: 250px; height: 100vh;
            position: fixed; left: 0; top: 0;
            background: #1e1e2d; color: #fff;
            padding-top: 30px;
        }
        .sidebar a {
            display: block; padding: 12px 20px;
            color: #cfd1d8; text-decoration: none; font-size: 16px;
        }
        .sidebar a:hover {
            background: #27293d; color: #fff;
        }

        .content {
            margin-left: 250px; padding: 25px;
        }

        .topbar {
            width: 100%; background: #fff; padding: 15px 20px;
            margin-bottom: 25px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        .card-custom {
            background: #fff; border-radius: 14px;
            padding: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h4 class="text-center mb-4">ADMIN PANEL</h4>
        <a href="/dashboard">Dashboard</a>
        <a href="/produk">Produk</a>
        <a href="/kategori">Kategori</a>
        <a href="/pengguna">Pengguna</a>
        <a href="/toko">Toko</a>
        <a href="/logout" class="text-danger">Logout</a>
    </div>

    <!-- CONTENT AREA -->
    <div class="content">

        <div class="topbar">
            <h4 class="m-0">Dashboard</h4>
        </div>

        @yield('content')

    </div>

</body>
</html>
