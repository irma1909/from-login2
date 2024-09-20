<?php

include 'koneksi_php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$data = mysqli_query($koneksi, "UPDATE user SET nama='$nama', email='$email' telp='$telp', alamat='$alamat', tanggal_lahir='$tangal_lahir', where id='$id'");

header("location:index.php");
?>