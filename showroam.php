<?php
include "koneksi.php";
if (isset($_POST['save'])) {
    $email=mysqli_real_escape_string($koneksi, $_POST['email']);
    $nama=mysqli_real_escape_string($koneksi, $_POST['nama']);
    $chat=mysqli_real_escape_string($koneksi, $_POST['chat']);


    $save=mysqli_query($koneksi,"INSERT INTO chat_visitor VALUES(
        '$email','$nama','$chat')");
    if ($save){
        echo "<script> window.alert('data disimpan') window.location='index.php' </script>";
    }else{
        echo "<script> window.alert('data gagal disimpan') window.location='index.php' </script>";
    }

}


?>





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

    </style>

    <!--Java Script-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

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



    <title>Latihan</title>
  </head>
  <body class="">
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

    <div class="jumbotron jumbotron-fluid custom-gradient-1" >
      <div class="container text-center text-light emblem">
        <img src="images/chiron.jpg" width="25%" class="rounded-circle img-thumbnail">
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
            Showroom mobil adalah fasilitas atau tempat di mana dealer mobil menampilkan berbagai model dan jenis mobil yang mereka jual kepada calon pembeli. Ini adalah titik penjualan utama untuk produsen mobil dan dealer, di mana konsumen dapat melihat, menyentuh, dan kadang-kadang mencoba mobil sebelum melakukan pembelian.</p>
        </div>
        
          <div class="col-md-5 text-justify">
            <p>Showroom mobil memainkan peran penting dalam industri otomotif sebagai titik pertemuan antara produsen, dealer, dan konsumen. Mereka menciptakan kesempatan bagi pelanggan untuk menjelajahi, membandingkan, dan memilih mobil yang paling sesuai dengan kebutuhan dan keinginan mereka.</p>
          
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
        <div class="col-md ">
          <div class="card">
            <img class="card-img-top" src="images/civic.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Honda Civic 2018</h6>
              <a href="detail.php?id_mobil=1" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/Corolla1998.png" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Toyota Corolla 1998</h6>
              <a href="detail.php?id_mobil=2" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/tiger.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Mercedes Tiger</h6>
              <a href="detail.php?id_mobil=3" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
            <div class="card">
              <img class="card-img-top" src="images/avenue.jpg" style="height: 120px;" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-title">Chrysler 5ft Avenue</h6>
                <a href="detail.php?id_mobil=4" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
  
          <div class="col-md">
            <div class="card">
              <img class="card-img-top" src="images/bmwe30.jpg" style="height: 120px;" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-title">BMW E30 1991</h6>
                <a href="detail.php?id_mobil=5" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
      </div>


      <h4 class="text-light">American Muscle</h4>
      <div class="row mb-5 gambar">
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/charger1970.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Dodge Charger R/T 1970</h6>
              <a href="detail.php?id_mobil=6" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/demon.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Dodge Challenger SRT Demon</h6>
              <a href="detail.php?id_mobil=7" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/gtx.png" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Plymouth GTX 1971</h6>
              <a href="detail.php?id_mobil=8" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

       <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/mustang.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Ford Mustang GT 2005</h6>
              <a href="detail.php?id_mobil=9" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/camaross.png" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Chevrolet Camaro SS 2020</h6>
              <a href="detail.php?id_mobil=10" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>    
      </div>


      <h4 class="text-light">SUV</h4>
      <div class="row mb-5 gambar">
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/audiq3.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Audi Q3 Sportback</h6>
              <a href="detail.php?id_mobil=11" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/cherokee.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Jeep Grand Cherokee 2015</h6>
              <a href="detail.php?id_mobil=12" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/rr.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Land Rover-Range Rover</h6>
              <a href="detail.php?id_mobil=13" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
            <div class="card">
              <img class="card-img-top" src="images/pajero.jpg" style="height: 120px;" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-title">Mitsubishi Pajero Sport</h6>
                <a href="detail.php?id_mobil=14" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
  
          <div class="col-md">
            <div class="card">
              <img class="card-img-top" src="images/isuzumux.jpg" style="height: 120px;" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-title">Isuzu MU-X</h6>
                <a href="detail.php?id_mobil=15" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
      </div>


      <h4 class="text-light">Sport</h4>
      <div class="row mb-5 gambar">
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/m3.png" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">BMW M3 GTR</h6>
              <a href="detail.php?id_mobil=16" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/rx7.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Mazda RX-7</h6>
              <a href="detail.php?id_mobil=17" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/skyliner34.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Nissan Skyline GTR R-34</h6>
              <a href="detail.php?id_mobil=18" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

       <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/lancerx.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Mitsubishi Lancer Evo-X</h6>
              <a href="detail.php?id_mobil=19" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/mk4.png" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Toyota Supra MK-4</h6>
              <a href="detail.php?id_mobil=20" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>
      </div>


      <h4 class="text-light">Supercar</h4>
      <div class="row mb-5 gambar">
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/carreragt.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Porsche Carrera GT</h6>
              <a href="detail.php?id_mobil=21" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/lykan.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">W-Motor Lykan Hypersport</h6>
              <a href="detail.php?id_mobil=22" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/chiron.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Bugatti Chiron</h6>
              <a href="detail.php?id_mobil=25" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
            <div class="card">
              <img class="card-img-top" src="images/corvettezr1.png" style="height: 120px;" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-title">Chevrolet Corvette ZR1</h6>
                <a href="detail.php?id_mobil=23" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
  
          <div class="col-md">
            <div class="card">
              
              <img class="card-img-top" src="images/jesko.png" style="height: 120px;" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-title">Koenigsegg Jesko Absolut</h6>
                <a href="detail.php?id_mobil=24" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
      </div>


      <h4 class="text-light">Off-Road</h4>
      <div class="row mb-5 gambar">
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/cruise.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Toyota Land Cruise 1990</h6>
              <a href="detail.php?id_mobil=26" class="btn btn-primary">Lihat</a>


            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/h2.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Hummer H2</h6>
              <a href="detail.php?id_mobil=27" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/defender.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Land Rover: Defender</h6>
              <a href="detail.php?id_mobil=28" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

       <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/colorado.jpg" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Chevrolet Colorado ZR2 Bison</h6>
              <a href="detail.php?id_mobil=29" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="images/rubicon.png" style="height: 120px;" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title">Jeep Wrangler Rubicon</h6>
              <a href="detail.php?id_mobil=30" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>
        

      </div>
    </div>
    <script>
     // JavaScript
function showMobilDetails(button) {
    // Mendapatkan nilai ID mobil dari atribut data
    var idMobil = $(button).data("id-mobil");

    // Pemeriksaan apakah idMobil adalah nilai yang valid (bisa ditambahkan pemeriksaan lain jika diperlukan)
    if (idMobil) {
        // Redirect ke halaman detail.php dengan menyertakan ID mobil sebagai parameter
        window.location.href = "detail.php?id_mobil=" + idMobil;
    } else {
        console.error("ID Mobil tidak valid.");
        // Atau lakukan penanganan kesalahan lainnya
    }
}

  </script>


    
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
              <p class="card-text">Jika ingin menemui Saya, silahkan bisa mengunjungi alamat dibawah. Atau Anda bisa menyampaikkan pesan & kesan.</p>
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
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" aria-describedby="email" placeholder="Masukan Email">
              
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
              <small id="emailHelp" class="form-text text-muted">*Menggunakan Nama Lengkap</small>
            </div>
            <div class="form-group">
              <label for="chat">Pesan</label>
              <input type="text" class="form-control" name="chat" placeholder="Isi Disini">
              <small id="emailHelp" class="form-text text-muted">*Isi Pesan yang ingin disampaikan</small>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="save" value="Save"  class="btn btn-primary">Submit</button>
          </form>

        </div>

      </div>

    </div>

  </section>

  <footer class="bg-dark text-white">
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