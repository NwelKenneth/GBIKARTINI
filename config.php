<?php
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username MySQL Anda
$password = "";     // Sesuaikan dengan password MySQL Anda
$database = "gereja";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
