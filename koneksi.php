<?php
// Menampilkan error biar gampang debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_latihan";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// (Optional) kalau mau cek berhasil
// echo "Koneksi berhasil";
?>