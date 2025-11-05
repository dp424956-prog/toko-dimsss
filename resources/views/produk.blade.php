<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Produk Penjualan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #0a0f1f;
      color: #e0f7ff;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #0f2027, #203a43, #2c5364);
      box-shadow: 0 0 15px #00eaff;
    }

    .navbar-brand {
      color: #00eaff !important;
      font-weight: bold;
      text-shadow: 0 0 10px #00eaff;
    }

    .btn-outline-light {
      border-color: #00eaff;
      color: #00eaff;
      transition: all 0.3s;
    }

    .btn-outline-light:hover {
      background-color: #00eaff;
      color: #0a0f1f;
      box-shadow: 0 0 15px #00eaff;
    }

    /* Judul */
    h2 {
      color: #00eaff;
      text-shadow: 0 0 15px #00eaff;
      margin-top: 40px;
      margin-bottom: 30px;
      text-align: center;
    }

    /* Kartu produk */
    .card {
      background-color: #0f1c2e;
      border: 1px solid #00eaff;
      box-shadow: 0 0 20px rgba(0, 234, 255, 0.3);
      border-radius: 15px;
      transition: all 0.3s ease;
      color: #e0f7ff;
    }

    .card:hover {
      box-shadow: 0 0 35px #00ffff;
      transform: scale(1.03);
    }

    .card-title {
      color: #00eaff;
      text-shadow: 0 0 8px #00eaff;
      font-weight: 600;
    }

    .card-text {
      color: #bde9ff;
    }

    .card-img-top {
      border-bottom: 1px solid #00eaff;
      transition: all 0.3s ease;
    }

    .card-img-top:hover {
      filter: brightness(1.2) drop-shadow(0 0 20px #00eaff);
    }

    /* Tombol beli */
    .btn-dark {
      background-color: #00eaff;
      color: #0a0f1f;
      font-weight: bold;
      border: none;
      box-shadow: 0 0 10px #00eaff;
      transition: all 0.3s ease;
    }

    .btn-dark:hover {
      background-color: #0a0f1f;
      color: #00eaff;
      border: 1px solid #00eaff;
      box-shadow: 0 0 20px #00ffff;
    }

    /* Footer */
    footer {
      margin-top: 50px;
      background-color: #0f1c2e;
      color: #8fdfff;
      text-align: center;
      padding: 15px 0;
      box-shadow: 0 -3px 10px #00eaff;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('beranda') }}">Sistem Penjualan</a>
      <div class="d-flex">
        <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container">
    <h2>Daftar Produk Penjualan</h2> 

    <div class="row justify-content-center">
      @foreach($produk as $item)
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset($item['foto']) }}" class="card-img-top" alt="{{ $item['nama'] }}" style="height:200px; object-fit:cover;">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $item['nama'] }}</h5>
              <p class="card-text">{{ $item['harga'] }}</p>
              <a href="{{ route('produk.detail', $item['id']) }}" class="btn btn-dark">Beli Sekarang</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <footer>
    <p>© 2025 Sistem Penjualan - Tema Biru Neon</p>
  </footer>
</body>
</html>
