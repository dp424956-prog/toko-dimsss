<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda | Sistem Penjualan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #0a0f1f;
      color: #e0f7ff;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

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

    h1 {
      color: #00eaff;
      text-shadow: 0 0 15px #00eaff;
      margin-top: 50px;
    }

    p.lead {
      color: #bde9ff;
    }

    img {
      width: 180px;
      margin-top: 30px;
      filter: drop-shadow(0 0 15px #00eaff);
      transition: transform 0.3s, filter 0.3s;
    }

    img:hover {
      transform: scale(1.1);
      filter: drop-shadow(0 0 25px #00ffff);
    }

    footer {
      margin-top: auto;
      background-color: #0f1c2e;
      color: #8fdfff;
      text-align: center;
      padding: 15px 0;
      box-shadow: 0 -3px 10px #00eaff;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('beranda') }}">Sistem Penjualan</a>
      <div class="d-flex">
        <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
      </div>
    </div>
  </nav>

  <div class="container text-center mt-5">
    <h1>Selamat Datang di Sistem Penjualan Online</h1>
    <p class="lead">Silakan login untuk melihat produk penjualan kami.</p>
    <img src="https://cdn-icons-png.flaticon.com/512/891/891462.png" alt="Shopping Icon">
  </div>

  <footer>
    <p>© 2025 Sistem Penjualan - Tema Biru Neon</p>
  </footer>
</body>
</html>
