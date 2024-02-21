<?php
  include "app/dotenv.php";
  include "app/default_path.php";
  include "app/config/database/connect.php";
  include "components/navbar.php";
  include "components/form_contact_us.php";

  $BASE_IMG_URL="public/cars/";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      body{
        animation: transition 0.8s;
        overflow-x: hidden;
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

      .navbar {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
      }
    </style>

    <title>Latihan</title>
  </head>

  <body>
    <?=Navbar($path)?>

    <main>

    </main>
    
    <section class="jumbotron jumbotron-fluid custom-gradient-1" >
      <div class="container text-center text-light">
        <figure>
          <img src="public/5-57639_basketball-wallpaper-hd.jpg" width="25%" class="rounded-circle img-thumbnail">
        </figure>

        <figcaption>
          <h3 class="display-4">Lieutenant Colonel</h3>
          <p class="lead">Selamat datang di sesuatu yang tidak bisa dijangkau</p>
        </figcaption>
      </div>
    </section>

    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>About</h2>
          </div> 
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5 text-justify ">
            <p>Tujuan saya membuat website ini adalah sebagai bahan pembelajaran mengenai Bootstrap versi 4. Sekolah saya di SMKN 2 Pekalongan dengan jurusan Teknik Jaringan Komputer & Telekomunikasi (TJKT). Alamat tinggal saya berada di Wiradesa</p>
          </div>
        
          <div class="col-md-5 text-justify ">
            <p>Website ini dibuat dengan tema showroam. Berupa barang barang yang akan ditampilkan di website ini. Website dalam masa pengembangan, jadi mohon maaf bila terjadi bug atau error</p>
          </div>
        </div>
      </div>
    </section>


    <section id="portofolio" class="portofolio pb-4">
      <div class="container">
        <div class="row mb-4 pt-4">
          <div class="col text-center text-light">
            <h2>Showroam halaman utama</h2>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md gambar">
            <div class="card">
              <img class="card-img-top" src="<?=$BASE_IMG_URL?>civic.jpg" style="height: 200px;" alt="Card image cap">
              
              <div class="card-body">
                <h5 class="card-title">Sedan</h5>

                <p class="card-text">
                  Sedan adalah jenis mobil penumpang yang memiliki desain tertentu. Karakteristik utama dari sedan adalah bentuk badannya yang lebih panjang, dengan empat pintu (dua pintu di sisi kiri dan kanan, serta pintu depan dan belakang). Sedan biasanya memiliki ruang kabin yang luas dan kursi belakang yang dapat dilipat untuk memberikan ruang tambahan jika diperlukan.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md gambar">
            <div class="card">
              <img class="card-img-top" src="<?=$BASE_IMG_URL?>charger1970.jpg" style="height: 200px;" alt="Card image cap">
              
              <div class="card-body">
                <h5 class="card-title">American Muscle</h5>
                <p class="card-text">
                  Mobil berjenis American Muscle adalah mobil yang berasal dari Amerika Serikat dan dirancang dengan fokus pada kinerja mesin yang kuat dan tenaga yang besar. Mobil-mobil ini terkenal karena mesin V8 yang besar dan tenaganya yang impresif, yang membuatnya cocok untuk akselerasi cepat dan kecepatan tinggi di jalan raya.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md gambar">
            <div class="card">
              <img class="card-img-top" src="<?=$BASE_IMG_URL?>rr.jpg" style="height: 200px;" alt="Card image cap">
            
              <div class="card-body">
                <h5 class="card-title">SUV</h5>
                <p class="card-text">
                  SUV, atau Sport Utility Vehicle, adalah jenis mobil yang dirancang untuk berbagai keperluan, termasuk penggunaan sehari-hari, petualangan off-road, dan kapasitas penumpang yang lebih besar dibandingkan dengan sedan atau hatchback.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md gambar">
            <div class="card">
              <img class="card-img-top" src="<?=$BASE_IMG_URL?>skyliner34.jpg" style="height: 200px;" alt="Card image cap">
            
              <div class="card-body">
                <h5 class="card-title">Sport</h5>
                <p class="card-text">
                  "Sport" dalam konteks mobil merujuk pada mobil yang dirancang dengan fokus pada kinerja dan pengalaman mengemudi yang dinamis. Mobil sport biasanya dirancang untuk memberikan akselerasi cepat, penanganan yang tajam, dan responsif, serta memiliki estetika yang menarik dan atletis.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md gambar">
            <div class="card">
              <img class="card-img-top" src="<?=$BASE_IMG_URL?>jesko.png" style="height: 200px;" alt="Card image cap">
            
              <div class="card-body">
                <h5 class="card-title">Supercar</h5>
                <p class="card-text">
                  Supercar adalah kategori tertinggi dari mobil sport yang dirancang untuk kinerja ekstrem, kecepatan luar biasa, dan teknologi canggih. Mobil-mobil ini mewakili puncak dari inovasi otomotif dan seringkali menjadi simbol dari prestasi teknik dan desain. 
                </p>
              </div>
            </div>
          </div>
        
          <div class="col-md gambar">
            <div class="card">
              <img class="card-img-top" src="<?=$BASE_IMG_URL?>rubicon.png" style="height: 200px;" alt="Card image cap">
            
              <div class="card-body">
                <h5 class="card-title">Off-Road</h5>
                <p class="card-text">
                  Off-road merujuk pada kegiatan atau kemampuan mobil untuk berkendara di luar jalan raya, terutama di medan yang tidak rata atau berat seperti tanah, kerikil, pasir, lumpur, atau daerah berbatu. Mobil yang dirancang atau dimodifikasi untuk off-road biasanya memiliki beberapa karakteristik khusus yang membedakannya dari mobil konvensional.
                </p>
              </div>
            </div>
          </div>
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
                  $email=mysqli_real_escape_string($connection, $_POST["email"]);
                  $nama=mysqli_real_escape_string($connection, $_POST["nama"]);
                  $chat=mysqli_real_escape_string($connection, $_POST["chat"]);
              
                  $save = mysqli_query($connection, "INSERT INTO chat_visitor (`email`, `nama`, `chat`) VALUES('$email','$nama','$chat')");
                  
                  if ($save){
                    echo "<script> alert('Pesan terkirim'); </script>";
                  } else{
                    echo "<script> alert('Pesan gagal terkirim!'); </script>";
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
  <script script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        var wScroll = $(this).scrollTop();

        if (wScroll > $('.portofolio').offset().top - 400) {
          $('.portofolio .gambar').each(function(i) {
            setTimeout(function() {
              $('.portofolio .gambar').eq(i).addClass('muncul');
            }, 500 * (i + 1));
          });
        }
      });
    });

    document.getElementById('linkToOtherPage').addEventListener('click', function() {
      // Panggil fungsi untuk menghilangkan kelas .muncul sebelum berpindah halaman
      hideOnPageChange();
    });

    // Fungsi untuk menghilangkan kelas .muncul
    function hideOnPageChange() {
      $('.portofolio .gambar').removeClass('muncul');
    }
  </script>
</html>