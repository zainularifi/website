<?php
session_start();
include "users.php";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($users[$username])) {
    if ($users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
    } else {
        header("Location: indexx.php?error=Password yang dimasukkan salah");
    }
} else {
    header("Location: indexx.php?error=Username tidak terdaftar");
}
exit;
