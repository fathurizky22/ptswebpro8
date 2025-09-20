<?php
$host = "localhost";
$user = "root"; // default XAMPP
$pass = "";
$db   = "ptswebpro8";

// koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>