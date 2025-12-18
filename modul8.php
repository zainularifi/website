<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
      body {
        background: linear-gradient(to right, #f8f9fa, #e3f2fd);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 20px;
      }

      h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #0d6efd;
        font-weight: bold;
        text-shadow: 1px 1px 2px #999;
      }

      .btn-primary {
        background-color: #0d6efd;
        border: none;
        transition: background-color 0.3s ease-in-out;
      }

      .btn-primary:hover {
        background-color: #0b5ed7;
      }

      .modal-header {
        background-color: #0d6efd;
        color: white;
      }

      .modal-body {
        background-color: #f1f1f1;
      }

      .modal-footer {
        background-color: #f8f9fa;
      }

      footer {
        text-align: center;
        margin-top: 40px;
        font-size: 14px;
        color: #6c757d;
      }
    </style>
  </head>
  <body>
    <h1>MyWeb</h1>

    <!-- Button trigger modal tugas -->
    <div class="text-center mb-4">
      <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modaltugas">
        Lihat Tugas
      </button>
    </div>

    <!-- Modal tugas -->
    <div class="modal fade" id="modaltugas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labeltugas" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content shadow">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="labeltugas">Tugas</h1>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
              function isGanjil($bilangan) {
                  return $bilangan % 2 != 0;
              }

              $jumlahGanjil = 0;
              for ($i = 10; $i <= 123456; $i++) {
                  if (isGanjil($i)) {
                      $jumlahGanjil++;
                  }
              }

              echo "Jumlah bilangan ganjil antara 10 sampai 123456 adalah: $jumlahGanjil";
            ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Mengerti</button>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <p>Copyright © Mohamad Zainul Arifin</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>