<?php
  $BASE_URL="../..";
  include "$BASE_URL/app/dotenv.php";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/app/config/database/connect.php";
  include "$BASE_URL/components/navbar.php";
  include "$BASE_URL/components/form_contact_us.php";
  include "$BASE_URL/components/card.php";

  $sql_sedan = "SELECT * FROM detail_kendaraan WHERE tipe_kendaraan = 'Sedan'";
  $sql_american = "SELECT * FROM detail_kendaraan WHERE tipe_kendaraan = 'American Muscle'";
  $sql_suv = "SELECT * FROM detail_kendaraan WHERE tipe_kendaraan = 'SUV'";
  $sql_sport = "SELECT * FROM detail_kendaraan WHERE tipe_kendaraan = 'Sport'";
  $sql_supercar = "SELECT * FROM detail_kendaraan WHERE tipe_kendaraan = 'Supercar'";
  $sql_offroad = "SELECT * FROM detail_kendaraan WHERE tipe_kendaraan = 'Off-Road'";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      body{
        overflow-x: hidden;
        animation: transition 0.8s;
      }
      
      section{
        min-height: 420px;
      }

      .custom-gradient {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
      }

      .custom-gradient-1{
        background-image: linear-gradient(to bottom, #1c1814, #6a6a64);
      }

      .portofolio{
        background-image: linear-gradient(to bottom, #1c1814, #6a6a64);
      }

      .portofolio .gambar {
        opacity: 0;
        transform: translate(400px, 0px);
        transition: 0.9s;
      }

      .portofolio .gambar.muncul {
        opacity: 1;
        transform: translate(0, 0);
      }

      @keyframes transition {       
        from{
          opacity: 0;
          transform: translate(-100px);
        }
        to {
          opacity: 2;
          transform: translate(0);
        }
      }
    </style>
    <title>Showroam</title>
  </head>
  <body>
    <?=Navbar($path)?>

    <div class="jumbotron jumbotron-fluid custom-gradient-1" >
      <div class="container text-center text-light emblem">
        <img src="<?=$BASE_URL?>/public/cars/chiron.jpg" width="25%" class="rounded-circle img-thumbnail">
        <h4 class="display-4">Ini adalah halaman Showroam</h4>
        <p class="lead">Selamat datang di sesuatu yang tidak bisa dijangkau</p>
      </div>
    </div>

    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>About</h2>
          </div> 
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5 text-justify">
            <p>
              Showroom mobil adalah fasilitas atau tempat di mana dealer mobil menampilkan berbagai model dan jenis mobil yang mereka jual kepada calon pembeli. Ini adalah titik penjualan utama untuk produsen mobil dan dealer, di mana konsumen dapat melihat, menyentuh, dan kadang-kadang mencoba mobil sebelum melakukan pembelian.
            </p>
          </div>
          
          <div class="col-md-5 text-justify">
            <p>
              Showroom mobil memainkan peran penting dalam industri otomotif sebagai titik pertemuan antara produsen, dealer, dan konsumen. Mereka menciptakan kesempatan bagi pelanggan untuk menjelajahi, membandingkan, dan memilih mobil yang paling sesuai dengan kebutuhan dan keinginan mereka.
            </p>   
          </div>
        </div>
      </div>
    </section>


    <section id="portofolio" class="portofolio bg-dark pb-4">
      <div class="container ">
        <div class="row mb-4 pt-4">
          <div class="col text-center text-light">
            <h2>Showroam berbagai jenis mobil</h2>
          </div>
        </div>

        <h4 class="text-light">Sedan</h4>
        <div class="row mb-5 gambar">
          <?php 
            $cars_sedan = $connection->query($sql_sedan);

            if ($cars_sedan->num_rows > 0) {
              while($car = $cars_sedan->fetch_assoc()) {
                echo Card($path, "$BASE_URL/public/cars", $car["gambar_kendaraan"], $car["merek_mobil"]);
              }
            } else {
              echo "<div class='col-md'>Data tidak ada.</div>";
            }
          ?>
        </div>

        <h4 class="text-light">American Muscle</h4>
        <div class="row mb-5 gambar">
          <?php 
            $cars_american = $connection->query($sql_american);

            if ($cars_american->num_rows > 0) {
              while($car = $cars_american->fetch_assoc()) {
                echo Card($path, "$BASE_URL/public/cars", $car["gambar_kendaraan"], $car["merek_mobil"]);
              }
            } else {
              echo "<div class='col-md'>Data tidak ada.</div>";
            }
          ?>
        </div>
        
        <h4 class="text-light">SUV</h4>
        <div class="row mb-5 gambar">
          <?php 
            $cars_suv = $connection->query($sql_suv);

            if ($cars_suv->num_rows > 0) {
              while($car = $cars_suv->fetch_assoc()) {
                echo Card($path, "$BASE_URL/public/cars", $car["gambar_kendaraan"], $car["merek_mobil"]);
              }
            } else {
              echo "<div class='col-md'>Data tidak ada.</div>";
            }
          ?>
        </div>

        <h4 class="text-light">Sport</h4>
        <div class="row mb-5 gambar">
          <?php 
            $cars_sport = $connection->query($sql_sport);

            if ($cars_sport->num_rows > 0) {
              while($car = $cars_sport->fetch_assoc()) {
                echo Card($path, "$BASE_URL/public/cars", $car["gambar_kendaraan"], $car["merek_mobil"]);
              }
            } else {
              echo "<div class='col-md'>Data tidak ada.</div>";
            }
          ?>
        </div>

        <h4 class="text-light">Supercar</h4>
        <div class="row mb-5 gambar">
          <?php 
            $cars_supercar = $connection->query($sql_supercar);

            if ($cars_supercar->num_rows > 0) {
              while($car = $cars_supercar->fetch_assoc()) {
                echo Card($path, "$BASE_URL/public/cars", $car["gambar_kendaraan"], $car["merek_mobil"]);
              }
            } else {
              echo "<div class='col-md'>Data tidak ada.</div>";
            }
          ?>
        </div>

        <h4 class="text-light">Off-Road</h4>
        <div class="row mb-5 gambar">
          <?php 
            $cars_offroad = $connection->query($sql_offroad);

            if ($cars_offroad->num_rows > 0) {
              while($car = $cars_offroad->fetch_assoc()) {
                echo Card($path, "$BASE_URL/public/cars", $car["gambar_kendaraan"], $car["merek_mobil"]);
              }
            } else {
              echo "<div class='col-md'>Data tidak ada.</div>";
            }
          ?>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact Us</h2>
          </div>
        </div>

        <div class="row justify-content-center mb-4">
          <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3">
              <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <p class="card-text">
                  Jika ingin menemui Saya, silahkan bisa mengunjungi alamat dibawah. Atau Anda bisa menyampaikkan pesan & kesan.
                </p>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item"><h1>Lokasi</h1></li>
              <li class="list-group-item">Wiradesa</li>
              <li class="list-group-item">Jl. Patimura</li>
              <li class="list-group-item">Kabupaten Pekalongan</li>
              <li class="list-group-item">Jawa Tengah, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            <form action="" method="post">
              <?php 
                echo FormContactUS();
                
                if (isset($_POST["save"])) {
                  $email=mysqli_real_escape_string($koneksi, $_POST["email"]);
                  $nama=mysqli_real_escape_string($koneksi, $_POST["nama"]);
                  $chat=mysqli_real_escape_string($koneksi, $_POST["chat"]);
              
                  $save = mysqli_query($koneksi, "INSERT INTO chat_visitor (`email`, `nama`, `chat`) VALUES('$email','$nama','$chat')");
                  
                  if ($save){
                    echo "<script> alert('Data tersimpan'); </script>";
                  } else{
                    echo "<script> alert('Data gagal tersimpan !!!'); </script>";
                  }
                }
              ?>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?=Footer()?>
  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        var wScroll = $(this).scrollTop();

        if (wScroll > $('.portofolio').offset().top - 300) {
          $('.portofolio .gambar').each(function(i) {
            setTimeout(function() {
              $('.portofolio .gambar').eq(i).addClass('muncul');
            }, 800 * (i + 1));
          });
        }
      });
    });
  </script>
</html>