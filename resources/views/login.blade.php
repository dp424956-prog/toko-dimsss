<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Sistem Penjualan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #0a0f1f;
      color: #e0f7ff;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      background: rgba(10, 20, 40, 0.95);
      border: 1px solid #00eaff;
      box-shadow: 0 0 25px #00eaff;
      border-radius: 15px;
      color: #e0f7ff;
      transition: all 0.3s ease;
    }

    .card:hover {
      box-shadow: 0 0 35px #00ffff;
      transform: scale(1.02);
    }

    .card-header {
      background: linear-gradient(90deg, #0f2027, #203a43, #2c5364);
      text-shadow: 0 0 10px #00eaff;
      border-bottom: 1px solid #00eaff;
    }

    .card-header h4 {
      color: #00eaff;
      font-weight: bold;
    }

    .form-control {
      background-color: #0f1c2e;
      border: 1px solid #00eaff;
      color: #e0f7ff;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      background-color: #0f1c2e;
      box-shadow: 0 0 10px #00eaff;
      border-color: #00eaff;
      color: #e0f7ff;
    }

    label {
      color: #bde9ff;
    }

    .btn-dark {
      background-color: #00eaff;
      color: #0a0f1f;
      font-weight: bold;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 0 10px #00eaff;
    }

    .btn-dark:hover {
      background-color: #0a0f1f;
      color: #00eaff;
      border: 1px solid #00eaff;
      box-shadow: 0 0 20px #00ffff;
    }

    .alert-danger {
      background-color: rgba(255, 0, 0, 0.1);
      border-color: #ff0040;
      color: #ff8080;
      text-shadow: 0 0 5px #ff0040;
    }

    .card-footer {
      background-color: #0f1c2e;
      color: #8fdfff;
      border-top: 1px solid #00eaff;
      text-shadow: 0 0 5px #00eaff;
    }

    small b {
      color: #00eaff;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header text-center">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            @if(session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('login.process') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
              </div>
              <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-dark">Login</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <small>Gunakan username: <b>admin</b> dan password: <b>12345</b></small>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
