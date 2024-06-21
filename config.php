<?php
$host = 'localhost';
$username = 'root';
$password = ''; // kosongkan jika pengguna root tidak memiliki password
$database = 'newsportal';

// Membuat koneksi
$con = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
}
?>

