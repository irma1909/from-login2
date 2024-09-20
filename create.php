<?php

// create = proses menambahka atau input data
// pake method POST

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['telp'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];

mysqli_query(mysql:$koneksi , query:"INSERT INTO user('$id', '$nama', '$email', '$telp', '$alamat', '$tanggal_lahir')");

header("location:index.php");
?>