<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum dan Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container py-4">
      <h1 class="mb-4">MyWeb</h1>

      <!-- Tombol -->
      <div class="d-flex flex-wrap gap-2 mb-4">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPraktikum1">Praktikum 1</button>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPraktikum2">Praktikum 2</button>
        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPraktikum3">Praktikum 3</button>
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaltugas1">Tugas 1</button>
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modaltugas2">Tugas 2</button>
      </div>

      <!-- MODAL PRAKTIKUM 1 -->
      <div class="modal fade" id="modalPraktikum1" tabindex="-1" aria-labelledby="labelPraktikum1" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Praktikum 1</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <?php
              $kelompok1 = array("Andi","Budi","Chika","David","Erna"); 
              echo "Nama Kelompok 1 :<br />";
              foreach ($kelompok1 as $anggota) {
                  echo " + $anggota<br/>";
              }

              echo "<br />Nama Kelompok 2 :<br />";
              $kelompok2 = array("Fera", "Gani", "Hery", "Intan", "Jaka");
              foreach ($kelompok2 as $anggota) {
                  echo " + $anggota<br/>";
              }
            ?>
          </div>
        </div></div>
      </div>

      <!-- MODAL PRAKTIKUM 2 -->
      <div class="modal fade" id="modalPraktikum2" tabindex="-1" aria-labelledby="labelPraktikum2" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Praktikum 2</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <?php
              $array1 = array("Arman","Bayu","Feri");
              echo "Array awal:<br/>";
              foreach ($array1 as $i => $val) echo "data ke-$i : $val<br/>";

              array_push($array1, "Herni", "Gita", "Dewi");
              echo "<br/>Setelah array_push():<br/>";
              foreach ($array1 as $i => $val) echo "data ke-$i : $val<br/>";

              array_shift($array1);
              echo "<br/>Setelah array_shift():<br/>";
              foreach ($array1 as $i => $val) echo "data ke-$i : $val<br/>";

              sort($array1);
              echo "<br/>Setelah sort():<br/>";
              foreach ($array1 as $i => $val) echo "data ke-$i : $val<br/>";
            ?>
          </div>
        </div></div>
      </div>

      <!-- MODAL PRAKTIKUM 3 -->
      <div class="modal fade" id="modalPraktikum3" tabindex="-1" aria-labelledby="labelPraktikum3" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Praktikum 3</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <?php
              $pegawai = array("lina", "arni", "jona", "punjabi", "marcus", "marlin");
              echo "<strong>Sebelum diurutkan:</strong><br />";
              foreach($pegawai as $i => $nama) echo "$i: $nama<br />";

              sort($pegawai);
              echo "<strong>Setelah diurutkan:</strong><br />";
              foreach($pegawai as $i => $nama) echo "$i: $nama<br />";
            ?>
          </div>
        </div></div>
      </div>

      <!-- MODAL TUGAS 1 -->
      <div class="modal fade" id="modaltugas1" tabindex="-1" aria-labelledby="labeltugas1" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tugas 1</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <?php
              $nilai = array("Andi" => 85, "Budi" => 78, "Citra" => 92, "Dina" => 88, "Eko" => 75);

              echo "<strong>Array Asosiatif Awal:</strong><br/>";
              print_r($nilai); echo "<br/><br/>";

              sort($nilai);
              echo "<strong>sort() (hilang key):</strong><br/>";
              print_r($nilai); echo "<br/><br/>";

              asort($nilai);
              echo "<strong>asort() (urut nilai):</strong><br/>";
              print_r($nilai); echo "<br/><br/>";

              arsort($nilai);
              echo "<strong>arsort() (urut nilai desc):</strong><br/>";
              print_r($nilai); echo "<br/><br/>";

              ksort($nilai);
              echo "<strong>ksort() (urut key):</strong><br/>";
              print_r($nilai); echo "<br/><br/>";

              krsort($nilai);
              echo "<strong>krsort() (urut key desc):</strong><br/>";
              print_r($nilai); echo "<br/><br/>";
            ?>
          </div>
        </div></div>
      </div>

      <!-- MODAL TUGAS 2 -->
      <div class="modal fade" id="modaltugas2" tabindex="-1" aria-labelledby="labeltugas2" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tugas 2</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <?php
              $nilai = array("Andi" => 85, "Budi" => 78, "Citra" => 92, "Dina" => 88, "Eko" => 75);

              echo "<strong>array_keys():</strong><br/>";
              print_r(array_keys($nilai)); echo "<br/><br/>";

              echo "<strong>array_values():</strong><br/>";
              print_r(array_values($nilai)); echo "<br/><br/>";

              echo "<strong>array_key_exists('Budi'):</strong><br/>";
              echo array_key_exists("Budi", $nilai) ? "Ada" : "Tidak Ada"; echo "<br/><br/>";

              echo "<strong>array_sum():</strong><br/>";
              echo array_sum($nilai); echo "<br/><br/>";

              echo "<strong>array_filter() >= 85:</strong><br/>";
              $filtered = array_filter($nilai, fn($v) => $v >= 85);
              print_r($filtered); echo "<br/><br/>";
            ?>
          </div>
        </div></div>
      </div>

      <footer class="text-center mt-5">
        <p>Copyright © Mohamad Zainul Arifin</p>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>