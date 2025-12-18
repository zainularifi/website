<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
  <style>
    body {
      font-family: Arial;
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px;
    }
    .container {
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 360px;
    }
    h2 {
      text-align: center;
    }
    label {
      margin-top: 10px;
      display: block;
    }
    input[type="text"],
    input[type="password"],
    input[type="file"],
    select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
    }
    .hobi label {
      display: inline-block;
      margin-right: 10px;
    }
    button {
      width: 100%;
      margin-top: 15px;
      padding: 10px;
      background: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Form Register</h2>
  <form onsubmit="handleRegister(event)">
    <label>Nama:</label>
    <input type="text" required>

    <label>Jenis Kelamin:</label>
    <label><input type="radio" name="gender" value="Laki-laki" required> Laki-laki</label>
    <label><input type="radio" name="gender" value="Perempuan"> Perempuan</label>

    <label>Foto:</label>
    <input type="file" accept="image/*">

    <label>Hobi:</label>
    <div class="hobi">
      <label><input type="checkbox" value="Membaca"> Membaca</label>
      <label><input type="checkbox" value="Musik"> Musik</label>
      <label><input type="checkbox" value="Game"> Game</label>
    </div>

    <label>Pekerjaan:</label>
    <select required>
      <option value="">-- Pilih --</option>
      <option>Pelajar</option>
      <option>Mahasiswa</option>
      <option>Karyawan</option>
      <option>Wirausaha</option>
    </select>

    <label>Password:</label>
    <input type="password" required>

    <button type="submit">Daftar</button>
  </form>
   <div class="switch-link">
      Sudah punya akun? <a href="#">Login di sini</a>
    </div>

</div>

<script>
  function handleRegister(event) {
    event.preventDefault(); // Mencegah reload
    window.location.href = "berhasil.php"; // Arahkan ke halaman sukses
  }
</script>

</body>
</html>