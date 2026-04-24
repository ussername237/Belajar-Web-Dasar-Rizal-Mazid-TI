<?php
include "koneksi.php";

echo "Koneksi berhasil <br><br>";

$query = mysqli_query($conn, "SELECT * FROM users");

while ($data = mysqli_fetch_assoc($query)) {
    echo $data['nama'] . " - " . $data['email'] . "<br>";
}
?>