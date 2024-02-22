<?php 
  include "../../../app/default_path.php";

  session_start();

  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https';
  } else {
    $protocol = 'http';
  }

  unset($_SESSION['username']);
  unset($_SESSION['role']);

  header("Location: $protocol://localhost/$path/page");
?>