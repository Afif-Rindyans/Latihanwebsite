<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $debe = "showroom_21022024";

  $connection = mysqli_connect($host, $user, $pass, $debe);

  if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
  }
?>