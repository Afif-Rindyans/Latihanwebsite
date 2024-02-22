<?php
  $BASE_URL="../../../../..";
  include "$BASE_URL/app/dotenv.php";
  include "$BASE_URL/app/config/database/connect.php";

  if (isset($_POST['save'])) {
    $id_mobil=mysqli_real_escape_string($koneksi, $_POST['id_mobil']);
    $nama_showroam=mysqli_real_escape_string($koneksi, $_POST['nama_showroam']);
    $merek_mobil=mysqli_real_escape_string($koneksi, $_POST['merek_mobil']);
    $harga=mysqli_real_escape_string($koneksi, $_POST['harga']);
    $tipe_kendaraan=mysqli_real_escape_string($koneksi, $_POST['tipe_kendaraan']);
    $tipe_mesin=mysqli_real_escape_string($koneksi, $_POST['tipe_mesin']);
    $kapasitas_oli=mysqli_real_escape_string($koneksi, $_POST['kapasitas_oli']);
    $kapasitas_mesin=mysqli_real_escape_string($koneksi, $_POST['kapasitas_mesin']);
    $bahan_bakar=mysqli_real_escape_string($koneksi, $_POST['bahan_bakar']);
    $tenaga_mesin=mysqli_real_escape_string($koneksi, $_POST['tenaga_mesin']);
    $jenis_transmisi=mysqli_real_escape_string($koneksi, $_POST['jenis_transmisi']);
    $jenis_turbo=mysqli_real_escape_string($koneksi, $_POST['jenis_turbo']);
    $gambar_kendaraan=mysqli_real_escape_string($koneksi, $_POST['gambar_kendaraan']);
    
    $video_kendaraan=mysqli_real_escape_string($koneksi, $_POST['video_kendaraan']);

    $save=mysqli_query($koneksi,"INSERT INTO detail_kendaraan VALUES(
        '$id_mobil','$nama_showroam','$merek_mobil','$harga','$tipe_kendaraan','$tipe_mesin','$kapasitas_oli','$kapasitas_mesin','$bahan_bakar','$tenaga_mesin','$jenis_transmisi','$jenis_turbo','$gambar_kendaraan','$video_kendaraan')");
    if ($save){
        echo "<script> window.alert('data disimpan') window.location='tambahkendaraan.php' </script>";
    } else{
        echo "<script> window.alert('data gagal disimpan') window.location='tambahkendaraan.php' </script>";
    }
  }
?>






<style>
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

body{
    animation: transition 0.8s;
}

@keyframes transition { 

    from{
        opacity: 0;
        transform: translate(-100px);
    }
    to{
        opacity: 2;
        transform: translate(0);
    }
    
}



body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
  const navbarButton = document.querySelector('.navbar-toggler');
  const persegiPanjang = document.querySelector('.persegi-panjang');

  navbarButton.addEventListener('click', function() {
    persegiPanjang.classList.toggle('active');
  });
});




</script>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body class="" style="background-image: url('images/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
  
  
  <div class="pos-fixed-top">
    <nav class="navbar navbar-light gradient">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <div class="persegi-panjang">
      <div class="container text-center pt-5">
      <a class="btn btn-custom rounded mb-5 text-black" href="dashboard.php" style="width: 80%; " role="button"><h6>Home Admin</h6></a>
        <a class="btn btn-custom rounded mb-5 text-black" href="datamobil.php" style="width: 80%; " role="button"><h6>Data Mobil</h6></a>
        <a class="btn  btn-custom rounded mb-5" href="tambahkendaraan.php" style="width: 80%; " role="button">Tambah</a>
        <a class="btn btn-custom rounded mb-5" href="datapembelian.php"  style="width: 80%; " role="button">Data Order</a>
        <a class="btn btn-custom rounded mb-5" href="chat.php" style="width: 80%; " role="button">Pesan</a>
        <a class="btn btn-custom rounded mb-5" href="saham.php"  style="width: 80%; " role="button">Saham Perusahaan</a>
      </div>
    </div>
  </div>

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
            <td>ID</td>
            <td><input type="number" placeholder="ID" name="id_mobil" required></td>
          </tr>
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
            <td>Kapasitas Oli</td>
            <td><input type="text" placeholder="Kapasitas Oli" name="kapasitas_oli" required></td>
          </tr>
        </table>
      </div>

      <div class="col-md-6">
        <table>
          
          <tr>
            <td>Kapasitas Mesin</td>
            <td><input type="text" placeholder="Kapasitas Mesin" name="kapasitas_mesin" required></td>
          </tr>
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
    <table >
    <tr>
            <td><input type="submit" name="save" value="Save" ></td>
          </tr>
    </table>
  </form>
</div>



 


  
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  </body>
  

</html>