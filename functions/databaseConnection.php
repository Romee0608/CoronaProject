<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "coronet";

$connect = new mysqli($servername, $username, $password, $database);

if ($connect->connect_error) {
die("FOUT: " . $connect->connect_error);
}
