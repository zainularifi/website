<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Website Modal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

  <!-- Tombol Modal -->
  <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#modalBeranda">Halaman Beranda</button>
  <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#modalProfil">Halaman Profil</button>
  <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#modalAboutMe">Halaman About Me</button>

  <!-- Modal Beranda -->
  <div class="modal fade" id="modalBeranda" tabindex="-1" aria-labelledby="labelBeranda" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="labelBeranda">Halaman Beranda</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h1>Beranda</h1>
          <nav>
            <a href="#">Beranda</a> | 
            <a href="#">Profil</a> | 
            <a href="#">About Me</a>
          </nav>
          <hr>
          <h2 align="center">Selamat Datang Di Website Saya!</h2>
          <div align="center">
            <img src="images/z.jpg" alt="Gambar Website" width="200">
          </div>
          <p align="center">Ini adalah website pribadi saya. Di sini Anda bisa mengenal saya lebih dalam dan saya juga akan berbagi informasi menarik tentang diri saya.</p>
          <hr>
          <footer>
            <p align="center">Copyright © Mohamad Zainul Arifin</p>
          </footer>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Profil -->
  <div class="modal fade" id="modalProfil" tabindex="-1" aria-labelledby="labelProfil" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="labelProfil">Halaman Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h1>Profil</h1>
          <nav>
            <a href="#">Beranda</a> | 
            <a href="#">Profil</a> | 
            <a href="#">About Me</a>
          </nav>
          <hr>
          <h2>Data Pribadi</h2>
          <table class="table table-bordered">
            <tr><th>Nama</th><td>Mohamad Zainul Arifin</td></tr>
            <tr><th>Jenis Kelamin</th><td>Laki-laki</td></tr>
            <tr><th>Alamat</th><td>Dsn Kates Ds Pacewetan Kec Pace Kab Nganjuk</td></tr>
            <tr><th>Usia</th><td>20 Tahun</td></tr>
            <tr><th>Agama</th><td>Islam</td></tr>
          </table>
          <h2>Hobi</h2>
          <ul>
            <li>Membaca</li>
            <li>Menulis</li>
            <li>Memancing</li>
          </ul>
          <hr>
          <footer>
            <p align="center">Copyright © Mohamad Zainul Arifin</p>
          </footer>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal About Me -->
  <div class="modal fade" id="modalAboutMe" tabindex="-1" aria-labelledby="labelAboutMe" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="labelAboutMe">Halaman About Me</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <h1>About Me</h1>
          <hr>
          <div align="center">
            <img src="images/zainul.jpg" alt="Foto Profil" width="200">
          </div>
          <h2 align="center">Halo, saya Mohamad Zainul Arifin!</h2>
          <p align="center">Saya seorang Mahasiswa Institut Teknologi Mojosari, Prodi Sistem Informasi. Saya tinggal di desa, anak ke-2 dari 2 bersaudara. Saya memiliki hobi memancing dan membaca novel. Sekian tentang diri saya. Terima kasih.</p>
          <hr>
          <footer>
            <p align="center">Copyright © Mohamad Zainul Arifin</p>
          </footer>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>