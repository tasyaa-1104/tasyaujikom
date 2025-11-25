<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <!-- Google Font -->
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
            background: #1f2937;   /* warna gelap */
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
            transition: 0.2s;
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

        /* DASHBOARD BOX */
        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        }

        .card .value {
            font-size: 28px;
            font-weight: 700;
            margin-top: 5px;
        }

        .label {
            color: gray;
            font-size: 14px;
        }

    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Admin Panel</h2>

        <div class="menu">
            <a href="{{ route('admin.das.index') }}" class="active">📊 Dashboard</a>
            <a href="{{ route('admin.produk') }}">🛒 Produk</a>
            <a href="#">🏬 Toko</a>
            <a href="#">📁 Kategori</a>
            <a href="#">👤 Pengguna</a>
            <a href="/logout" style="background:#dc2626; color:white;">🚪 Logout</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="title">Dashboard</div>

        <!-- STAT CARDS -->
        <div class="cards">
            <div class="card">
                <div class="label">Total Produk</div>
                <div class="value">128</div>
            </div>
            <div class="card">
                <div class="label">Total Toko</div>
                <div class="value">34</div>
            </div>
            <div class="card">
                <div class="label">Total Kategori</div>
                <div class="value">12</div>
            </div>
            <div class="card">
                <div class="label">Total Pengguna</div>
                <div class="value">820</div>
            </div>
        </div>

    </div>

</body>
</html>
