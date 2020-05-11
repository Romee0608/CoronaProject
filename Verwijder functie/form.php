<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

//connection
$connect = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if ($connect->connect_error) {
    die("FOUT: " . $connect->connect_error);
}
?>


<form action="connect.php" method="post" class="loginform">
    <button type="submit" name="login-submit">Login</button>
</form>

<?php 
$id = $_GET['id'];
$sql = "DELETE FROM articles WHERE id =" . $id;
$conn = $connect->query($sql);