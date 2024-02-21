<?php
$host = "localhost";
$user = "root";
$pass = "";
$debe = "showroom_21022024";

$koneksi = mysqli_connect($host, $user, $pass, $debe);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}








?>