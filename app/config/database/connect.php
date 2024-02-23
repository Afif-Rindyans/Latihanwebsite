<?php
  use DOTENV\DotEnv;
  (new DotEnv(__DIR__ . '\.env'))->load();

  $host = getenv("HOSTNAME_DATABASE");
  $user = getenv("USERNAME_DATABASE");
  $pass = getenv("PASSWORD_DATABASE");
  $db_name = getenv("NAME_DATABASE");

  $connection = mysqli_connect($host, $user, $pass, $db_name);

  if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
  }
?>