<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="phpbimbel";

$koneksi = new mysqli($servername, $username, $password, $database);
if ($koneksi->connect_error) {
    die("gagal terkoneksi". $koneksi->connect_error);
}

// echo"berhasil terhubung ke database";
