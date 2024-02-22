<?php
// Include file koneksi
include './app/dotenv.php';
include './app/config/database/connect.php';

// Mendapatkan nilai ID mobil dari parameter URL
$id_mobil = isset($_GET['id_mobil']) ? $_GET['id_mobil'] : null;

// Memastikan bahwa $id_mobil adalah bilangan bulat positif
$id_mobil = filter_var($id_mobil, FILTER_VALIDATE_INT, array('options' => array('min_range' => 1)));

if ($id_mobil !== false) {
    // Menyiapkan pernyataan SQL menggunakan prepared statements
    $query = "SELECT * FROM detail_kendaraan WHERE id_mobil = ?";
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

<script>
  // Mendapatkan nilai id_mobil dari parameter URL
  const urlParams = new URLSearchParams(window.location.search);
  const id_mobil = urlParams.get('id_mobil');

  // Lakukan sesuatu dengan id_mobil, misalnya, tampilkan informasi sesuai ID tersebut
  // ...

  //suara
  function playSound() {
    // Dapatkan elemen audio menggunakan id
    var audio = document.getElementById("myAudio");

    // Jalankan suara
    audio.play();
  }
  
</script>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--CSS-->
    <style>
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

    body{
    animation: transition 0.5s;
}

.order{
  left: 0;
}

.card{
  height: 450px;
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



        </style>


    <title>Showroam</title>
  </head>



  
  <body class="mt-5" style="background-image: url('images/bg.jpg'); background-size: cover; background-repeat: no-repeat;">

  <audio id="myAudio">
     <source src="sound/<?php echo $data_mobil['audio']; ?>" type="audio/mp3">
       Your browser does not support the audio tag.
      </audio>



    <nav class="navbar fixed-top navbar-expand-lg navbar-light custom-gradient">
        <div class="container">
        <a class="navbar-brand" style="font-weight: bolder;" href="#">MENU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Home</a>
            <a class="nav-item nav-link active" href="#">Showroam<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="biodata.html">Biodata</a>
          </div>
        </div>
      </div>
      </nav>

      <section id="contact" class="contact">
        <div class="container">
          <div class="row pt-4 mb-4">
            <a class="btn btn-primary rounded" href="showroam.php" style="width: 10%; height: 10%;" role="button">Kembali</a>
            <div class="col text-center text-light">
              <h2><?php echo $data_mobil['nama_showroam']; ?></h2>
    
            </div>
    
          </div>
    
    
          <div class="row">
            <div class="col-md mb-3" >
              <div class="card">
                <td><img class="card-img-top" src="images/<?php echo $data_mobil['gambar_kendaraan']; ?> " height="325px"></td>
                
                
                <div class="card-body">
                  <h3 class="card-title" style="font-weight: bold;" ><?php echo $data_mobil['merek_mobil']; ?></h3>
                  
                  <a class="btn btn-primary rounded ml-5 order" href="order.php"  role="button">PESAN SEKRANG!</a>
                  
                  
                  
                  
                </div>
              </div>
            </div>

            
            <div class="col-lg-4 mx-5 mb-5"  style=" font-weight: bold;" >
            <ul class="list-group">
                
                <li class="list-group-item"><h2><?php echo $data_mobil['harga']; ?></h2></li>
                <li class="list-group-item">Tipe Kendaraan  :<?php echo $data_mobil['tipe_kendaraan']; ?></li>
                <li class="list-group-item">Tipe Mesin      :<?php echo $data_mobil['tipe_mesin']; ?></li>
                <li class="list-group-item">Kapasitas Oli   :<?php echo $data_mobil['kapasitas_oli']; ?></li>
                <li class="list-group-item">Kapasitas mesin :<?php echo $data_mobil['kapasitas_mesin']; ?></li>
                <li class="list-group-item">Bahan Bakar     :<?php echo $data_mobil['bahan_bakar']; ?></li>
                <li class="list-group-item">Tenaga Mesin    :<?php echo $data_mobil['tenaga_mesin']; ?></li>
                <li class="list-group-item">Jenis Transmisi :<?php echo $data_mobil['jenis_transmisi']; ?></li>
                <li class="list-group-item">Jenis Turbo     :<?php echo $data_mobil['jenis_turbo']; ?></li>
                
              </ul>
            </div>        
        </div>

        
        
  


      
    

    
          </div>
         
        </div>
    
      </section>



      <footer class="bg-dark text-white fixed-bottom mt-5">
        <div class="container">
          <div class="row pt-3">
            <div class="col text-center">
              <p>Made By Muhammad Afif Rindyansyah</p>
            </div>
    
          </div>
        </div>
    
      </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>