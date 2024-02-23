<?php
  function Navbar() {
    return "
      <nav class='navbar navbar-light gradient'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarToggleExternalContent' aria-controls='navbarToggleExternalContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
      </nav>
    ";
  }

  function Navigation($path) {
    return "
      <div class='persegi-panjang'>
      <div class='container text-center pt-5'>
          <a class='btn  btn-custom rounded mb-5' href='$path/page/admin' style='width: 80%;' role='button'>Profile</a>
          <a class='btn btn-custom rounded mb-5 text-black' href='$path/page/admin/dashboard' style='width: 80%;' role='button'><h6>Home Admin</h6></a>
          <a class='btn btn-custom rounded mb-5 text-black' href='$path/page/admin/dashboard/cars' style='width: 80%;' role='button'><h6>Data Mobil</h6></a>
          <a class='btn btn-custom rounded mb-5' href='$path/page/admin/dashboard/orders'  style='width: 80%;' role='button'>Data Order</a>
          <a class='btn btn-custom rounded mb-5' href='$path/page/admin/dashboard/customer-chat'  style='width: 80%;' role='button'>Pesan</a>
          <a class='btn btn-custom rounded mb-5' href='$path/page/admin/dashboard/saham'  style='width: 80%;' role='button'>Saham Perusahaan</a>
        </div>
      </div>
    ";
  }

  function ShowNavigation() {
    return "
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const navbarButton = document.querySelector('.navbar-toggler');
          const persegiPanjang = document.querySelector('.persegi-panjang');

          navbarButton.addEventListener('click', function() {
            persegiPanjang.classList.toggle('active');
          });
        });
      </script>
    ";
  }
?>