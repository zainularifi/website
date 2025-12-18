<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum & Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
      <h1 class="mb-4">MyWeb</h1>

      <!-- Tombol-tombol trigger modal -->
      <div class="mb-3 d-flex flex-wrap gap-2">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPraktikum1">Praktikum 1</button>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPraktikum2">Praktikum 2</button>
        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPraktikum3">Praktikum 3</button>
        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalPraktikum4">Praktikum 4</button>
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modaltugas1">Tugas 1</button>
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modaltugas2">Tugas 2</button>
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modaltugas3">Tugas 3</button>
      </div>

      <!-- Modal Praktikum 1 -->
      <div class="modal fade" id="modalPraktikum1" tabindex="-1" aria-labelledby="labelPraktikum1" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelPraktikum1">Praktikum 1</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
              $nilai = 70;
              if ($nilai >= 60){
                  echo "Anda Lulus dengan Nilai $nilai";
              }
            ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div></div>
      </div>

      <!-- Modal Praktikum 2 -->
      <div class="modal fade" id="modalPraktikum2" tabindex="-1" aria-labelledby="labelPraktikum2" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelPraktikum2">Praktikum 2</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php 
              $username = "Mohamad Zainul Arifin";
              if ($username == "Mohamad Zainul Arifin") {
                  echo "Anda Berhasil Login, Zainul";
              } else {
                  echo "Username Anda Salah";
              }
            ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div></div>
      </div>

      <!-- Modal Praktikum 3 -->
      <div class="modal fade" id="modalPraktikum3" tabindex="-1" aria-labelledby="labelPraktikum3" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelPraktikum3">Praktikum 3</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
              $nilai = 80;
              if ($nilai >= 90) {
                  echo "Nilai Memuaskan";
              } elseif ($nilai >= 80) {
                  echo "Nilai Bagus";
              } elseif ($nilai >= 50) {
                  echo "Nilai Kurang";
              } else {
                  echo "Nilai Sangat Kurang";
              }
            ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div></div>
      </div>

      <!-- Modal Praktikum 4 -->
      <div class="modal fade" id="modalPraktikum4" tabindex="-1" aria-labelledby="labelPraktikum4" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelPraktikum4">Praktikum 4</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
              $bln = date("M");
              switch ($bln) {
                case "Jan": $namaBln = "Januari"; break;
                case "Feb": $namaBln = "Februari"; break;
                case "Mar": $namaBln = "Maret"; break;
                case "Apr": $namaBln = "April"; break;
                case "May": $namaBln = "Mei"; break;
                case "Jun": $namaBln = "Juni"; break;
                case "Jul": $namaBln = "Juli"; break;
                case "Aug": $namaBln = "Agustus"; break;
                case "Sep": $namaBln = "September"; break;
                case "Oct": $namaBln = "Oktober"; break;
                case "Nov": $namaBln = "November"; break;
                case "Dec": $namaBln = "Desember"; break;
              }
              echo "Nama bulan sekarang adalah: $namaBln";
            ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div></div>
      </div>

      <!-- Modal Tugas 1 -->
      <div class="modal fade" id="modaltugas1" tabindex="-1" aria-labelledby="labeltugas1" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labeltugas1">Tugas 1</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
              $jumlahFotocopy = 158;
              if ($jumlahFotocopy < 100) {
                  $hargaPerLembar = 150;
              } elseif ($jumlahFotocopy <= 200) {
                  $hargaPerLembar = 100;
              } else {
                  $hargaPerLembar = 80;
              }
              $totalBiaya = $jumlahFotocopy * $hargaPerLembar;
              echo "Total biaya fotocopy: Rp. " . number_format($totalBiaya, 0, ',', '.');
            ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div></div>
      </div>

      <!-- Modal Tugas 2 -->
      <div class="modal fade" id="modaltugas2" tabindex="-1" aria-labelledby="labeltugas2" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labeltugas2">Tugas 2</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
              $nilai = 85;
              if ($nilai >= 90 && $nilai <= 100) {
                  $grade = "A"; $keterangan = "Baik Sekali";
              } elseif ($nilai >= 76 && $nilai <= 89) {
                  $grade = "B"; $keterangan = "Baik";
              } elseif ($nilai >= 60 && $nilai <= 75) {
                  $grade = "C"; $keterangan = "Cukup";
              } elseif ($nilai >= 50 && $nilai <= 59) {
                  $grade = "D"; $keterangan = "Hampir Cukup";
              } else {
                  $grade = "E"; $keterangan = "Kurang";
              }
              echo "Grade: $grade, Keterangan: $keterangan";
            ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div></div>
      </div>

      <!-- Modal Tugas 3 -->
      <div class="modal fade" id="modaltugas3" tabindex="-1" aria-labelledby="labeltugas3" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labeltugas3">Tugas 3</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
              $bulan = "Februari";
              $bulanLower = strtolower($bulan);
              switch ($bulanLower) {
                  case "januari": case "maret": case "mei": case "juli":
                  case "agustus": case "oktober": case "desember":
                      $jumlahHari = 31; break;
                  case "april": case "juni": case "september": case "november":
                      $jumlahHari = 30; break;
                  case "februari":
                      $jumlahHari = 28; break;
                  default:
                      $jumlahHari = "Bulan tidak valid";
              }
              echo "Jumlah hari pada bulan $bulan adalah: $jumlahHari";
            ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div></div>
      </div>

      <footer class="text-center mt-4">
        <p>Copyright © Mohamad Zainul Arifin</p>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>