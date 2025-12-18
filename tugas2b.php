<?php
$valid_username = "admin";
$valid_password = "12345";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $valid_username && $password == $valid_password) {
    header("Location: profil.php");
    exit();
} else {
    echo "Login gagal! Username atau password salah.";
}
?>