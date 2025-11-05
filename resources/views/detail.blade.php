<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Pembelian | Sistem Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0a0a1a;
            color: #e0e0e0;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: linear-gradient(90deg, #001f3f, #003366);
            box-shadow: 0 0 15px rgba(0, 238, 255, 0.4);
        }

        .navbar-brand {
            color: #00eaff !important;
            font-weight: bold;
            text-shadow: 0 0 10px #00eaff;
        }

        .card, img {
            border-radius: 15px;
        }

        .container {
            margin-top: 60px;
            max-width: 1000px;
        }

        img {
            max-height: 420px;
            object-fit: contain;
            border: 3px solid rgba(0, 238, 255, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        img:hover {
            transform: scale(1.03);
            box-shadow: 0 0 25px #00eaff;
        }

        h2 {
            color: #00eaff;
            text-shadow: 0 0 8px #00eaff;
            font-weight: 600;
        }

        h4 {
            color: #00ffaa;
            font-weight: 600;
        }

        p {
            color: #b8e2ff;
        }

        .btn-dark {
            background-color: #001f3f;
            border: none;
            box-shadow: 0 0 10px rgba(0, 238, 255, 0.4);
            transition: all 0.3s ease;
        }

        .btn-dark:hover {
            background-color: #00eaff;
            color: #000;
            box-shadow: 0 0 20px #00eaff;
        }

        .btn-outline-secondary {
            color: #00eaff;
            border-color: #00eaff;
        }

        .btn-outline-secondary:hover {
            background-color: #00eaff;
            color: #000;
        }

        .text-success {
            color: #00ffaa !important;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('produk') }}">Sistem Penjualan</a>
    <div class="d-flex">
      <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
    </div>
  </div>
</nav>

<!-- Konten -->
<div class="container text-center mt-5">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-5 mb-4 mb-md-0">
      <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}" class="img-fluid shadow-lg">
    </div>

    <div class="col-md-6 text-md-start">
      <h2>{{ $detail['nama'] }}</h2>
      <h4 class="text-success mb-3">{{ $detail['harga'] }}</h4>
      <p>{{ $detail['deskripsi'] }}</p>

      <div class="mt-4 d-flex gap-3 justify-content-md-start justify-content-center">
        <button class="btn btn-dark px-4">Konfirmasi Pembelian</button>
        <a href="{{ route('produk') }}" class="btn btn-outline-secondary px-4">Kembali ke Produk</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
