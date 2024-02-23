<?php
  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https';
  } else {
    $protocol = 'http';
  }

  if (!isset($_SESSION['username'])) {
    header("Location: $protocol://localhost/$path/page/auth/login");
  }
?>