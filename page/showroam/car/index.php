<?php
  session_start();
  $BASE_URL="../../..";

  include "$BASE_URL/app/dotenv.php";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/app/config/database/connect.php";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/components/navbar.php";

  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https';
  } else {
    $protocol = 'http';
  }

  if (isset($_GET['id'])) {
    $id_mobil = $_GET['id'];
  } else {
    header("Location: $protocol://localhost/$path");
  }

  // Mendapatkan nilai ID mobil dari parameter URL
  // Memastikan bahwa $id_mobil adalah bilangan bulat positif
  $id_mobil = filter_var($id_mobil, FILTER_VALIDATE_INT, array('options' => array('min_range' => 1)));

  if ($id_mobil !== false) {
    // Menyiapkan pernyataan SQL menggunakan prepared statements
    $query = "SELECT * FROM cars_detail WHERE car_id = ?";
    $stmt = mysqli_prepare($connection, $query);

    // Mengikat parameter
    mysqli_stmt_bind_param($stmt, 'i', $id_mobil);

    // Mengeksekusi pernyataan
    mysqli_stmt_execute($stmt);

    // Mengambil hasil query
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        $data_mobil = mysqli_fetch_assoc($result);
        // Lakukan sesuatu dengan data mobil
        // ...
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    // Menutup pernyataan prepared
    mysqli_stmt_close($stmt);
  } else {
    echo "Invalid ID mobil.";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--CSS-->
    <style>
      body {
        animation: transition 0.5s;
        overflow-x: hidden;
      }

      .list-group {
        opacity: 0.7; /* Anda bisa mengatur nilai antara 0 dan 1 sesuai keinginan */
        background-image: linear-gradient(to bottom, #1c1814, #6a6a64);
      }

      .video{
        opacity: 1;
      }

      .custom-gradient {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
      }

      .order{
        left: 0;
      }

      .card{
        height: 450px;
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
    </style>
    <title>Showroam</title>
  </head>

  <body class="mt-5" style="background-image: url('<?=$BASE_URL?>/public/cars/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
    <?=Navbar($path)?>

    <section id="contact" class="contact">
      <div class="container">
          <div class="row pt-4 mb-4">
            <a class="btn btn-primary rounded" href="<?=$path?>/page/showroam" style="width: 10%; height: 10%;" role="button">Kembali</a>
            <div class="col text-center text-light">
              <h2><?php echo $data_mobil['showroam_name']; ?></h2>
            </div>
    
          </div>
    
          <div class="row">
            <div class="col-md mb-3" >
              <div class="card">
                <img class="card-img-top" src="<?=$BASE_URL?>/public/cars/<?=$data_mobil['car_image']?>" height="325px">

                <div class="card-body">
                  <h3 class="card-title" style="font-weight: bold;" ><?php echo $data_mobil['brand']; ?></h3>
                  <a class="btn btn-primary rounded ml-5 order" href="<?=$path?>/page/showroam/car/order"  role="button">PESAN SEKRANG!</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mx-5 mb-5"  style=" font-weight: bold;" >
              <ul class="list-group">
                <li class="list-group-item"><h2><?php echo $data_mobil['price']; ?></h2></li>
                <li class="list-group-item">Tipe Kendaraan  : <?=$data_mobil['type_car']?></li>
                <li class="list-group-item">Tipe Mesin      : <?=$data_mobil['type_engine']?></li>
                <li class="list-group-item">Kapasitas mesin : <?=$data_mobil['fuel']?></li>
                <li class="list-group-item">Bahan Bakar     : <?=$data_mobil['oil_capacity']?></li>
                <li class="list-group-item">Tenaga Mesin    : <?=$data_mobil['engine_power']?></li>
                <li class="list-group-item">Jenis Transmisi : <?=$data_mobil['type_transmission']?></li>
                <li class="list-group-item">Jenis Turbo     : <?=$data_mobil['type_turbo']?></li>
              </ul>
            </div>        
          </div>
        </div>
      </div>
    </section>

    <?=Footer()?>
  </body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>