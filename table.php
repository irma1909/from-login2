<?php

include 'koneksi php';

$create = "CREATE TABLE bimbel (
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(255) NOT NULL,
jenjang VARCHAR(255) NOT NULL,
kelas VARCHAR(255) NOT NULL,
waktu VARCHAR(255) NOT NULL
)";

if ($koneksi->query($create) === true) {
    echo "tabel bimbel berhasil di buat";
} else {
    echo "gagal membuat table";
}

$koneksi->close();

?>