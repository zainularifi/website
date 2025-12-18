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
    <a href="link 1.php">Link 1</a> |
    <a href="link 2.php">Link 2</a> |
    <a href="link 3.php">Link 3</a> |
    <a href="logout.php">Logout</a>
</nav>
<p>Ini adalah isi dari Link 3</p>
<?php include "footer.php"; ?>