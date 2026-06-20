<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "PemrogramanWeb2"
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi Berhasil";

?>