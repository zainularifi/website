<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyWeb - Form Register & Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        background-color: #f8f9fa;
      }

      h1 {
        color: #0d6efd;
      }

      .form-container label {
        margin-top: 10px;
      }

      .hobi label {
        margin-right: 10px;
      }

      .modal-header {
        background: linear-gradient(to right, #0d6efd, #198754);
        color: white;
      }

      .modal-footer {
        background-color: #f1f1f1;
      }

      .btn-custom {
        margin: 5px;
        width: 150px;
      }

      .modal-body form input,
      .modal-body form select {
        margin-bottom: 10px;
      }

      small.text-muted {
        display: block;
        text-align: center;
        width: 100%;
      }
    </style>
  </head>
  <body>

    <div class="container text-center mt-5">
      <h1>MyWeb</h1>
      <div class="mt-4">
        <button type="button" class="btn btn-warning btn-custom" data-bs-toggle="modal" data-bs-target="#modaltugas1">
          Tugas 1 - Register
        </button>
        <button type="button" class="btn btn-success btn-custom" data-bs-toggle="modal" data-bs-target="#modaltugas2">
          Tugas 2 - Login
        </button>
      </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="modaltugas1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labeltugas1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labeltugas1">Form Register</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <form onsubmit="handleRegister(event)">
              <div class="form-container">

                <label>Nama:</label>
                <input type="text" class="form-control" required>

                <label>Jenis Kelamin:</label>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Laki-laki" required>
                    <label class="form-check-label">Laki-laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Perempuan">
                    <label class="form-check-label">Perempuan</label>
                  </div>
                </div>

                <label>Foto:</label>
                <input type="file" class="form-control" accept="image/*">

                <label>Hobi:</label>
                <div class="hobi">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Membaca">
                    <label class="form-check-label">Membaca</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Musik">
                    <label class="form-check-label">Musik</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Game">
                    <label class="form-check-label">Game</label>
                  </div>
                </div>

                <label>Pekerjaan:</label>
                <select class="form-select" required>
                  <option value="">-- Pilih --</option>
                  <option>Pelajar</option>
                  <option>Mahasiswa</option>
                  <option>Karyawan</option>
                  <option>Wirausaha</option>
                </select>

                <label>Password:</label>
                <input type="password" class="form-control" required>

                <button type="submit" class="btn btn-success mt-3">Daftar</button>
              </div>
            </form>
            <div class="text-center mt-2">
              Sudah punya akun? <a href="#">Login di sini</a>
            </div>
          </div>
          <div class="modal-footer">
            <small class="text-muted">&copy; Mohamad Zainul Arifin</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="modaltugas2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labeltugas2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labeltugas2">Form Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <form action="tugas2b.php" method="POST">
              <label>Username:</label>
              <input type="text" class="form-control" name="username" required>

              <label>Password:</label>
              <input type="password" class="form-control" name="password" required>

              <button type="submit" class="btn btn-primary mt-3">Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <small class="text-muted">&copy; Mohamad Zainul Arifin</small>
          </div>
        </div>
      </div>
    </div>

    <script>
      function handleRegister(event) {
        event.preventDefault();
        window.location.href = "berhasil.php";
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>