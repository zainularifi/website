<?php include "header.php"; ?>
<form method="POST" action="login.php">
    <p>Silahkan login</p>
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