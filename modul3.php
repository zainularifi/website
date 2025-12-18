<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum & Tugas Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="p-4">

    <h1 class="mb-4">Modul Praktikum & Tugas</h1>

    <!-- Tombol Modal -->
    <button class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#modalPraktikum1">Praktikum 1</button>
    <button class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#modalPraktikum2">Praktikum 2</button>
    <button class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#modalTugas1">Tugas 1</button>
    <button class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#modalTugas2">Tugas 2</button>

    <!-- Modal Praktikum 1 -->
    <div class="modal fade" id="modalPraktikum1" tabindex="-1" aria-labelledby="labelPraktikum1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelPraktikum1">Praktikum 1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <?php
              $nim = '202357201017';
              $nama = 'Mohamad Zainul Arifin';
              $alamat = 'Dsn. Kates Ds. Pacewetan';
              $nilai = 80;

              echo "NIM: $nim<br>";
              echo "Nama: $nama<br>";
              echo "Alamat: $alamat<br>";
              echo "Nilai: $nilai";
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Praktikum 2 -->
    <div class="modal fade" id="modalPraktikum2" tabindex="-1" aria-labelledby="labelPraktikum2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelPraktikum2">Praktikum 2</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <?php
              $a = 5;
              $b = 2.5;
              $komentar = "Selamat Datang";

              echo "Nilai a = $a<br>";
              echo "Nilai b = $b<br>";
              echo "Komentar = $komentar<br><br>";

              echo "Penjumlahan: " . ($a + $b) . "<br>";
              echo "Pengurangan: " . ($a - $b) . "<br>";
              echo "Perkalian: " . ($a * $b) . "<br>";
              echo "Pembagian: " . ($a / $b) . "<br><br>";

              $namaLab = "ITM";
              $garis = str_repeat("=", 30);
              echo "$garis<br>$komentar di Lab $namaLab<br>Selamat Belajar Pemrograman Web<br>$garis";
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tugas 1 -->
    <div class="modal fade" id="modalTugas1" tabindex="-1" aria-labelledby="labelTugas1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelTugas1">Tugas 1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <?php
              $saldoAwal = 1000000; 
              $bunga = 0.03; 
              $bulan = 11;
              $saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);

              echo "Saldo akhir setelah $bulan bulan adalah: Rp " . number_format($saldoAkhir, 2, ',', '.') . ",-";
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tugas 2 -->
    <div class="modal fade" id="modalTugas2" tabindex="-1" aria-labelledby="labelTugas2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelTugas2">Tugas 2</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <?php
              define("PI", 3.14159265359);
              $r = 10;
              $s = 15;

              $luasAlas = PI * pow($r, 2);
              $luasPermukaan = PI * $r * ($r + $s);

              echo "Luas alas kerucut: " . number_format($luasAlas, 2, ',', '.') . " cm²<br>";
              echo "Luas permukaan kerucut: " . number_format($luasPermukaan, 2, ',', '.') . " cm²";
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>