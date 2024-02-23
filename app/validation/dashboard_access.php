<?php
  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https';
  } else {
    $protocol = 'http';
  }

  if (isset($_SESSION['role'])) {
    if ($_SESSION["role"] != "admin") {
      header("Location: $protocol://localhost/$path/page/auth/login");
    }
  } else {
    header("Location: $protocol://localhost/$path/page/auth/login");
  }
?>