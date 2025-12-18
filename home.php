<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: indexx.php");
    exit;
}
include "header.php";
?>
<p>Username: <?php echo $_SESSION['username']; ?></p>
<nav>
    <a href="index.html">beranda</a> |
    <a href="profil.php">profil</a> |
    <a href="aboutme.html">aboutme</a> |
    <a href="logout.php">Logout</a>
</nav>
<p>Anda telah berhasil login</p>
<?php include "footer.php"; ?>