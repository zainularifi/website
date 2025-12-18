<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      body {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      h1 {
        text-align: center;
        margin: 30px 0;
        font-weight: bold;
        color: #343a40;
      }

      .nav {
        background-color: #0d6efd;
        padding: 10px 20px;
        justify-content: center;
      }

      .nav-link {
        color: #fff !important;
        font-weight: bold;
        margin: 0 10px;
      }

      .nav-link.active {
        text-decoration: underline;
      }

      .container-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
      }

      .card {
        width: 300px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
      }

      .card:hover {
        transform: translateY(-5px);
      }

      .card-title i {
        margin-right: 8px;
        color: #0d6efd;
      }

      footer {
        text-align: center;
        margin-top: 40px;
        padding: 20px;
        background-color: #343a40;
        color: white;
      }
    </style>
  </head>
  <body>
    <h1>Website Pribadi</h1>

    <nav class="nav">
      <a class="nav-link active" href="index.html">Beranda</a>
      <a class="nav-link" href="profil.php">Profil</a>
      <a class="nav-link" href="index.php">Portfolio</a>
      <a class="nav-link" href="aboutme.html">About Me</a>
    </nav>

    <div class="container-cards">
      <div class="card">
      <img src="images/html.png" alt="Foto Profil" width="290">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-code-slash"></i>Modul 1: HTML</h5>
          <a href="modul1.php" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>

      <div class="card">
      <img src="images/css.png" alt="Foto Profil" width="200">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-palette"></i>Modul 2: CSS</h5>
          <a href="modul2.php" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
        <img src="images/php.jpeg" alt="Foto Profil" width="250">
          <h5 class="card-title"><i class="bi bi-terminal"></i>Modul 3: Struktur Dasar PHP</h5>
          <a href="modul3.php" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>

      <div class="card">
      <img src="images/pernyataan kondisi.jpeg" alt="Foto Profil" width="299">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-diagram-3"></i>Modul 4: Pernyataan Kondisi</h5>
          <a href="modul4.php" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>

      <div class="card">
      <img src="images/perulangan.jpeg" alt="Foto Profil" width="299">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-arrow-repeat"></i>Modul 5: Pernyataan Perulangan</h5>
          <a href="modul5.php" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>

      <div class="card">
      <img src="images/array.png" alt="Foto Profil" width="299">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-collection"></i>Modul 6: Array</h5>
          <a href="modul6.php" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>

      <div class="card">
      <img src="images/form.jpeg" alt="Foto Profil" width="299">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-ui-checks"></i>Modul 7: Form</h5>
          <a href="modul7.php" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>
      <div class="card">
      <img src="images/function.png" alt="Foto Profil" width="299">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-braces"></i>Modul 8: Function</h5>
          <a href="modul8.php" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>
       <div class="card">
      <img src="images/sesion.jpg" alt="Foto Profil" width="299">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-lock"></i>Modul 9: Sesion dan Cookies</h5>
          <a href="modul9.php" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>
    </div>

    <footer>
      Copyright © Mohamad Zainul Arifin
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>