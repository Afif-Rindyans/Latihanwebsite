<?php
  session_start();
  
  $BASE_URL="../../../../..";

  include "$BASE_URL/app/dotenv.php";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/app/validation/dashboard_access.php";
  include "$BASE_URL/app/config/database/connect.php";
  include "$BASE_URL/components/navbar_dashboard.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
      body{
        animation: transition 0.8s;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
      }

      .gradient {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;
      }

      .persegi-panjang {
        width: 250px; /* Atur lebar sesuai kebutuhan */
        height: 110%; /* Atur tinggi sesuai kebutuhan */
        background-image: linear-gradient(to bottom, #1c1814, #494947);
        transform: translateX(-100%);
        transition: 1s;
      }

      .btn-custom {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
      }

      .persegi-panjang.active {
        transform: translateX(0); /* Atur nilai transformasi yang sesuai saat kelas active */
      }

      /* ... CSS yang sudah ada ... */
      .portofolio .transisi {
        opacity: 0;
        transform: translate(100px, 0);
        transition: opacity 0.5s ease-out, transform 0.8s ease-out;
      }

      .portofolio .transisi.muncul {
        opacity: 1;
        transform: translate(0, 0);
      }

      @keyframes transition { 
        from {
          opacity: 0;
          transform: translate(-100px);
        }
        to {
          opacity: 2;
          transform: translate(0);
        }
      }

      form {
        position: absolute;
        top: 50px;
        left: 275px;
        width: 200%;
        max-width: 70%;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      table {
        width: 100%;
      }

      table, th, td {
        border-collapse: collapse;
      }

      th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      th {
        background-color: #4CAF50;
        color: white;
      }

      input[type="text"],
      input[type="number"] {
        width: 100%;
        padding: 8px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 4px;
      }

      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tambah Kendaraan</title>
  </head>
  <body class="" style="background-image: url('<?=$BASE_URL?>/public/cars/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
  
  
  <div class="pos-fixed-top">
    <?=Navbar()?>
    <?=Navigation($path)?>

  <div class="container input">
  
  <form action="" method="post">
    <table>
      <tr>
        <th colspan="2" class="text-center">Tambah Atau Masukan Data Kendaraan<th>
      </tr>
    </table>

    <div class="row">       
      <div class="col-lg-6">
        <table>
          <tr>
            <td>Nama Showroam</td>
            <td><input type="text" placeholder="Nama Showroam" name="nama_showroam" required></td>
          </tr>
          <tr>
            <td>Merek</td>
            <td><input type="text" placeholder="Merek" name="merek_mobil" required></td>
          </tr>
          <tr>
            <td>Harga</td>
            <td><input type="text" placeholder="Harga" name="harga" required></td>
          </tr>
          <tr>
            <td>Tipe Kendaraan</td>
            <td><input type="text" placeholder="Tipe Kendaraan" name="tipe_kendaraan" required></td>
          </tr>
          <tr>
            <td>Tipe Mesin</td>
            <td><input type="text" placeholder="Tipe Mesin" name="tipe_mesin" required></td>
          </tr>
          <tr>
            <td>Kapasitas Mesin</td>
            <td><input type="text" placeholder="Kapasitas Mesin" name="kapasitas_mesin" required></td>
          </tr>
        </table>
      </div>

      <div class="col-md-6">
        <table>
          <tr>
            <td>Bahan Bakar</td>
            <td><input type="text" placeholder="Bahan Bakar" name="bahan_bakar" required></td>
          </tr>
          <tr>
            <td>Tenaga Mesin</td>
            <td><input type="text" placeholder="Tenaga Mesin" name="tenaga_mesin" required></td>
          </tr>
          <tr>
            <td>Jenis Transmisi</td>
            <td><input type="text" placeholder="Jenis Transmisi" name="jenis_transmisi" required></td>
          </tr>
          <tr>
            <td>Jenis Turbo</td>
            <td><input type="text" placeholder="Jenis Turbo" name="jenis_turbo" required></td>
          </tr>
          <tr>
            <td>Gambar Kendaraan</td>
            <td><input type="text" placeholder="Gambar Kendaraan" name="gambar_kendaraan" required></td>
          </tr>
          <tr>
            <td>Video</td>
            <td><input type="text" placeholder="Video" name="video_kendaraan" required></td>
          </tr>
        </table>
      </div>
    </div>

    <table>
      <tr>
        <td><input type="submit" name="save" value="Save" ></td>
      </tr>
    </table>

    <?php 
      if (isset($_POST['save'])) {
        $nama_showroam=mysqli_real_escape_string($connection, $_POST['nama_showroam']);
        $merek_mobil=mysqli_real_escape_string($connection, $_POST['merek_mobil']);
        $harga=mysqli_real_escape_string($connection, $_POST['harga']);
        $tipe_kendaraan=mysqli_real_escape_string($connection, $_POST['tipe_kendaraan']);
        $tipe_mesin=mysqli_real_escape_string($connection, $_POST['tipe_mesin']);
        $bahan_bakar=mysqli_real_escape_string($connection, $_POST['bahan_bakar']);
        $kapasitas_mesin=mysqli_real_escape_string($connection, $_POST['kapasitas_mesin']);
        $tenaga_mesin=mysqli_real_escape_string($connection, $_POST['tenaga_mesin']);
        $jenis_transmisi=mysqli_real_escape_string($connection, $_POST['jenis_transmisi']);
        $jenis_turbo=mysqli_real_escape_string($connection, $_POST['jenis_turbo']);
        $gambar_kendaraan=mysqli_real_escape_string($connection, $_POST['gambar_kendaraan']);
        $video_kendaraan=mysqli_real_escape_string($connection, $_POST['video_kendaraan']);
    
        $save=mysqli_query($connection,"INSERT INTO cars_detail (showroam_name, brand, price, type_car, type_engine, oil_capacity, fuel, engine_power, type_transmission, type_turbo, car_image, car_video) VALUES ('$nama_showroam', '$merek_mobil', '$harga', '$tipe_kendaraan', '$tipe_mesin', '$bahan_bakar', '$kapasitas_mesin', '$tenaga_mesin', '$jenis_transmisi', '$jenis_turbo', '$gambar_kendaraan', '$video_kendaraan')");

        if ($save){
            echo "<script>alert('Data tersimpan')</script>";
        } else{
            echo "<script>alert('Gagal tersimpan')</script>";
        }
      }
    ?>
  </form>
</div>
  </body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <?=ShowNavigation()?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var transisiElements = document.querySelectorAll('.transisi');

      transisiElements.forEach(function(element, index) {
        setTimeout(function() {
          element.classList.add('muncul');
        }, index * 500); // Adjust the delay as needed
      });
    });
  </script>
</html>