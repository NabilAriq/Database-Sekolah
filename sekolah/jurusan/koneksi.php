<?php
$servername = "localhost";
$username = "root";
$port = 8111;
$password = "";
$database = "sekolah";

//koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database, $port);

//periksa koneksi
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

?>