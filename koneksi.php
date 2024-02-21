<?php
$host = "localhost";
$user = "root";
$pass = "";
$debe = "showroam";

$koneksi = mysqli_connect($host, $user, $pass, $debe);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}








?>