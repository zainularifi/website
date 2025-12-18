<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : 'Tidak ada';
    $pekerjaan = $_POST['pekerjaan'];

    // Simpan file foto (jika ada)
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $fotoName = $_FILES['foto']['name'];
        $fotoTmp = $_FILES['foto']['tmp_name'];
        move_uploaded_file($fotoTmp, "uploads/" . $fotoName);
        $fotoPath = "uploads/" . $fotoName;
    } else {
        $fotoPath = "Tidak ada foto diunggah.";
    }

    echo "<h2>Hasil Biodata</h2>";
    echo "Nama: $nama<br>";
    echo "Jenis Kelamin: $gender<br>";
    echo "Alamat: $alamat<br>";
    echo "Hobi: $hobi<br>";
    echo "Pekerjaan: $pekerjaan<br>";
    echo "Foto:<br>";
    if ($fotoPath != "Tidak ada foto diunggah.") {
        echo "<img src='$fotoPath' width='150'>";
    } else {
        echo $fotoPath;
    }
}
?>