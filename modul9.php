<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
      body {
        background: linear-gradient(to right, #fdfbfb, #ebedee);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 20px;
      }

      h1 {
        text-align: center;
        color: #0d6efd;
        font-weight: 700;
        text-shadow: 1px 1px 2px #ccc;
        margin-bottom: 40px;
      }

      .btn-primary {
        background-color: #0d6efd;
        border: none;
        margin: 10px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }

      .btn-primary:hover {
        background-color: #0b5ed7;
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      }

      .modal-header {
        background-color: #0d6efd;
        color: white;
        border-bottom: 2px solid #0044cc;
      }

      .modal-body {
        background-color: #f1f1f1;
        font-size: 16px;
      }

      .modal-footer {
        background-color: #f8f9fa;
      }

      input[type="text"], input[type="password"] {
        margin: 5px 0;
        width: 100%;
        padding: 8px;
        border: 1px solid #ced4da;
        border-radius: 4px;
      }

      input[type="submit"] {
        background-color: #0d6efd;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        margin-top: 10px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #0b5ed7;
      }

      footer {
        text-align: center;
        font-size: 14px;
        color: #6c757d;
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <h1>MyWeb</h1>

    <!-- Button trigger modals -->
    <div class="text-center">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltugas1">
        Tugas 1
      </button>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltugas2">
        Tugas 2
      </button>
    </div>

    <!-- Modal tugas 1 -->
    <div class="modal fade" id="modaltugas1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labeltugas1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content shadow-lg">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="labeltugas1">Tugas 1</h1>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
              $users = [
                  "Ali" => "password1",
                  "Bona" => "password2",
                  "Charlie" => "password3",
                  "Dede" => "password4",
                  "Emon" => "password5"
              ];

              foreach ($users as $username => $password) {
                  echo "Username: $username, Password: $password<br>";
              }
            ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Mengerti</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal tugas 2 -->
    <div class="modal fade" id="modaltugas2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labeltugas2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content shadow-lg">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="labeltugas2">Tugas 2</h1>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php include "header.php"; ?>
            <form method="POST" action="login.php">
              <p><strong>Silakan login</strong></p>
              Username: <input type="text" name="username"><br>
              Password: <input type="password" name="password"><br>
              <input type="submit" value="Submit">
            </form>
            <?php
              if (isset($_GET['error'])) {
                  echo "<p style='color:red'>" . htmlspecialchars($_GET['error']) . "</p>";
              }
            ?>
            <?php include "footer.php"; ?>
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