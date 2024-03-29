<?php 
  session_start();
  $BASE_URL="../..";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/components/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
      body{
        animation: transition 0.5s;
      }

      .custom-gradient {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
      }

      @keyframes transition { 
        from {
          opacity: 0;
          transform: translate(-100px);
        }
        to {
          opacity: 2;
          transform: translate(0px);
        }
      }
    </style>

    <title>Muhammad Afif Rindyansyah | Developers</title>
  </head>
  <body class="mb-5">
    <?=Navbar($path, "biodata")?>

    <section id="contact" style="padding-top: 4em;">
      <div class="container">
        <div class="row mb-4 mt-3">
          <div class="col-lg-4">
            <div class="card text-dark bg-light mb-3 ">
              <img src="<?=$BASE_URL?>/public/5-57639_basketball-wallpaper-hd.jpg"  width="25%" class="rounded-circle img-thumbnail">

              <div class="card-body">
                <h5 class="card-title">Biodata</h5>
                <p class="card-text">Berisi tentang</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-5">
            <ul class="list-group">
              <li class="list-group-item"><h1>Biodata Developer</h1></li>
              <li class="list-group-item">Nama                : Muhammad Afif Rindyansyah</li>
              <li class="list-group-item">Umur                : 18</li>
              <li class="list-group-item">TTL                 : Pekalongan, 1 Oktober 2005</li>
              <li class="list-group-item">Alamat              : Wiradesa</li>
              <li class="list-group-item">Agama               : Islam</li>
              <li class="list-group-item">Pendidikan Terakhir : SMKN 2 Pekalongan</li>
              <li class="list-group-item">Tinggi Badan        : 178 cm</li>
              <li class="list-group-item">Berat Badan         : 55 kg</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <?=Footer()?>
  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>