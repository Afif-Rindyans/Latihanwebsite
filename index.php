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

.navbar {
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}

    </style>



<!--Java Script-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

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


  // Tambahkan event listener ke elemen navigasi
document.getElementById('linkToOtherPage').addEventListener('click', function() {
  // Panggil fungsi untuk menghilangkan kelas .muncul sebelum berpindah halaman
  hideOnPageChange();
});

// Fungsi untuk menghilangkan kelas .muncul
function hideOnPageChange() {
  $('.portofolio .gambar').removeClass('muncul');
}
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
          <a class="nav-item nav-link active"   href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" id="linkToOtherPage"  href="showroam.php">Showroam</a>
          <a class="nav-item nav-link" href="biodata.html">Biodata</a>
        </div>
      </div>
    </div>
    </nav>

    <div class="jumbotron jumbotron-fluid custom-gradient-1" >
      <div class="container text-center text-light">
        <img src="images/5-57639_basketball-wallpaper-hd.jpg" width="25%" class="rounded-circle img-thumbnail">
        <h3 class="display-4">Lieutenant Colonel</h3>
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
    <div class="container ">
      <div class="row mb-4 pt-4">
        <div class="col text-center text-light">
          <h2>Showroam halaman utama</h2>
          <h1>

          </h1>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md gambar">
          <div class="card">
            <img class="card-img-top" src="images/civic.jpg" style="height: 200px;" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Sedan</h5>
              <p class="card-text">
                Sedan adalah jenis mobil penumpang yang memiliki desain tertentu. Karakteristik utama dari sedan adalah bentuk badannya yang lebih panjang, dengan empat pintu (dua pintu di sisi kiri dan kanan, serta pintu depan dan belakang). Sedan biasanya memiliki ruang kabin yang luas dan kursi belakang yang dapat dilipat untuk memberikan ruang tambahan jika diperlukan.</p>
              
            
            </div>
          </div>
        </div>
        <div class="col-md gambar">
          <div class="card">
            <img class="card-img-top" src="images/charger1970.jpg" style="height: 200px;" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">American Muscle</h5>
              <p class="card-text">
                Mobil berjenis American Muscle adalah mobil yang berasal dari Amerika Serikat dan dirancang dengan fokus pada kinerja mesin yang kuat dan tenaga yang besar. Mobil-mobil ini terkenal karena mesin V8 yang besar dan tenaganya yang impresif, yang membuatnya cocok untuk akselerasi cepat dan kecepatan tinggi di jalan raya.</p>
              
            
            </div>
          </div>
        </div>
        <div class="col-md gambar">
          <div class="card">
            <img class="card-img-top" src="images/rr.jpg" style="height: 200px;" alt="Card image cap">
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
            <img class="card-img-top" src="images/skyliner34.jpg" style="height: 200px;" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Sport</h5>
              <p class="card-text">
                "Sport" dalam konteks mobil merujuk pada mobil yang dirancang dengan fokus pada kinerja dan pengalaman mengemudi yang dinamis. Mobil sport biasanya dirancang untuk memberikan akselerasi cepat, penanganan yang tajam, dan responsif, serta memiliki estetika yang menarik dan atletis.</p>
              
            
            </div>
          </div>
        </div>
        <div class="col-md gambar">
          <div class="card">
            <img class="card-img-top" src="images/jesko.png" style="height: 200px;" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Supercar</h5>
              <p class="card-text">
                Supercar adalah kategori tertinggi dari mobil sport yang dirancang untuk kinerja ekstrem, kecepatan luar biasa, dan teknologi canggih. Mobil-mobil ini mewakili puncak dari inovasi otomotif dan seringkali menjadi simbol dari prestasi teknik dan desain. </p>
              
            
            </div>
          </div>
        </div>
        <div class="col-md gambar">
          <div class="card">
            <img class="card-img-top" src="images/rubicon.png" style="height: 200px;" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Off-Road</h5>
              <p class="card-text">
                Off-road merujuk pada kegiatan atau kemampuan mobil untuk berkendara di luar jalan raya, terutama di medan yang tidak rata atau berat seperti tanah, kerikil, pasir, lumpur, atau daerah berbatu. Mobil yang dirancang atau dimodifikasi untuk off-road biasanya memiliki beberapa karakteristik khusus yang membedakannya dari mobil konvensional.</p>
              
            
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

  <footer class="bg-dark text-white ">
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