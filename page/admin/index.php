<?php 
  session_start();
  
  $BASE_URL="../..";
  
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/components/navbar_dashboard.php";
  include "$BASE_URL/app/validation/dashboard_access.php";
  

  if (isset($_SESSION["role"])) {
    
  } else {

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
      body {
        animation: transition 0.8s;
      }

      h1 {
        color: white;
      }

      .gradient {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;
      }

      .persegi-panjang {
        width: 250px; /* Atur lebar sesuai kebutuhan */
        height: 100%; /* Atur tinggi sesuai kebutuhan */
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
      .chart-container {
        width: 50%;
        height: 50%;
        position: absolute;
        top: 225px;
        right: 475px;
        background-color: #ffffff; /* Warna putih tanpa transparansi */
        opacity: 0.8;
        border-radius: 8px;
        padding: 10px;
      }

      #myChart {
        width: 100%;
        height: 100%;
      }

      .kartu{
        position: absolute;
        top: 75px;
        margin: 0 0 0 14%;
      }

      .box{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      }

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
    </style>

  <title><?=$_SESSION["username"]?> | Profile</title>
</head>
<body style="background-image: url('<?=$BASE_URL?>/public/cars/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
  <div class="pos-fixed-top">
    <?=Navbar()?>

    
    <h1>Nama: <?=$_SESSION["username"]?></h1> <a href="<?=$path?>/page/auth/signout"><button class="btn btn-primary">Logout</button></a>
    <?=Navigation($path)?>
  </div>
</body>
  <?=ShowNavigation()?>
</html>