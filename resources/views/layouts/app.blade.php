<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaporBanjir BPBD')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f6f9; }
        header { background: #0056b3; color: white; padding: 15px 20px; text-align: center; }
        nav { background: #004085; padding: 10px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { max-width: 800px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        footer { background: #333; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; }
        .card { border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; border-radius: 6px; }
        .badge { padding: 5px 10px; border-radius: 4px; color: white; font-weight: bold; display: inline-block; }
        .bg-waspada { background-color: #ffc107; color: #212529; }
        .bg-siaga { background-color: #fd7e14; }
        .bg-awas { background-color: #dc3545; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; }
        button { background: #0056b3; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
        button:hover { background: #004085; }
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir - BPBD Kabupaten Bandung</h1>
    </header>
    <nav>
        <a href="{{ route('lapor.create') }}">Buat Laporan</a>
        <a href="{{ route('lapor.index') }}">Daftar Laporan</a>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2026 BPBD Kabupaten Bandung - Sistem Pelaporan Banjir</p>
    </footer>
</body>
</html>