<?php
  session_start();

  $BASE_URL="../../..";

  include "$BASE_URL/app/dotenv.php";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/app/config/database/connect.php";
  include "$BASE_URL/app/validation/dashboard_access.php";
  include "$BASE_URL/components/navbar_dashboard.php";

  // Query SQL untuk mendapatkan data dari tabel 'cars_detail'
  $query = "SELECT price FROM cars_detail";
  $result = $connection->query($query);

  // Inisialisasi variabel total harga
  $totalHarga = 0;

  // Periksa apakah query berhasil dijalankan
  if ($result) {
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Ambil nilai 'harga' dari setiap baris
        $harga = $row['price'];

        // Bersihkan string 'harga' dari karakter non-numerik
        $numerikHarga = (float) preg_replace("/[^0-9]/", "", $harga);

        // Tambahkan nilai numerik 'harga' ke totalHarga
        $totalHarga += $numerikHarga;
    }

    // Cetak nilai totalHarga  
  } else {
    echo "Error: " . $connection->error;
  }

  // Tutup koneksi (opsional, tergantung kebutuhan)
  $connection->close();
?>

<?php
  include "$BASE_URL/app/config/database/connect.php";

  // Query SQL untuk menghitung jumlah baris dalam tabel 'pemesanan'
  $query = "SELECT COUNT(*) AS jumlah_kolom FROM orders";
  $result = $connection->query($query);

  // Periksa apakah query berhasil dijalankan
  if ($result) {
    // Ambil hasil sebagai asosiatif array
    $row = $result->fetch_assoc();

    // Ambil nilai jumlah baris
    $jumlah_kolom = $row['jumlah_kolom'];
  } else {
    echo "Error: " . $connection->error;
  }
  
  // Tutup koneksi (opsional, tergantung kebutuhan)
  $connection->close();
?>

<?php
  include "$BASE_URL/app/config/database/connect.php";

  // Query SQL untuk menghitung jumlah baris dalam tabel 'pemesanan'
  $query = "SELECT COUNT(*) AS jumlah_chat FROM chat_visitors";
  $result = $connection->query($query);

  // Periksa apakah query berhasil dijalankan
  if ($result) {
    // Ambil hasil sebagai asosiatif array
    $row = $result->fetch_assoc();

    // Ambil nilai jumlah baris
    $jumlah_chat = $row['jumlah_chat'];
  } else {
    echo "Error: " . $connection->error;
  }

  // Tutup koneksi (opsional, tergantung kebutuhan)
  $connection->close();
?>

<?php
  include "$BASE_URL/app/config/database/connect.php";

  // Query SQL untuk menghitung jumlah baris dalam tabel 'pemesanan'
  $query = "SELECT COUNT(*) AS jumlah_akun FROM users";
  $result = $connection->query($query);

  // Periksa apakah query berhasil dijalankan
  if ($result) {
    // Ambil hasil sebagai asosiatif array
    $row = $result->fetch_assoc();

    // Ambil nilai jumlah baris
    $jumlah_akun = $row['jumlah_akun'];
  } else {
    echo "Error: " . $connection->error;
  }

  // Tutup koneksi (opsional, tergantung kebutuhan)
  $connection->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      body {
        animation: transition 0.8s;
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

    <title>Dashboard</title>
  </head>

  <body class="" style="background-image: url('<?=$BASE_URL?>/public/cars/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="pos-fixed-top">
      <?=Navbar()?>
      
      <div class="chart-container">
        <canvas id="myChart"></canvas>
      </div>

      <?=Navigation($path)?>

      <section id="portofolio " class="portofolio kartu">
        <div class="container">
          <div class="row ml-5">
            <div class="col-sm transisi">
              <div class="card box">
                <div class="card-body">
                  <h6 class="card-title">Harga Keseluruhan Mobil</h6>
                  <p class="card-text"><?php echo "Rp " . number_format($totalHarga, 0, ',', '.')?></p>     
                </div>
              </div>
            </div>

            <div class="col-sm transisi">
              <div class="card box">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Orderan</h5>
                  <p class="card-text"><?php echo   number_format($jumlah_kolom) . " Antrian"?></p>
                </div>
              </div>
            </div>

            <div class="col-sm transisi">
              <div class="card box">
                <div class="card-body">
                  <h5 class="card-title">Pesan Masuk</h5>
                  <p class="card-text"><?php echo   number_format($jumlah_chat) . " Pesan Masuk"?></p>
                </div>
              </div>
            </div>
        
            <div class="col-sm transisi">
              <div class="card box">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Akun Yang Dibuat</h5>
                  <p class="card-text"><?php echo   number_format($jumlah_akun) . " Akun"?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
  <?=ShowNavigation()?>
  <script>
   document.addEventListener('DOMContentLoaded', function() {
      // Dapatkan elemen canvas
      var ctx = document.getElementById('myChart').getContext('2d');

      // Data contoh untuk line chart
      var data = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
        datasets: [{
          label: 'Grafik',
          backgroundColor: '#ffffff',
          borderColor: 'rgba(36, 96, 31, 1)',
          borderWidth: 2,
          data: [10000, 20000, 15000, 25000, 30000, 50],
        }]
      };

      // Konfigurasi chart
      var options = {
        scales: {
          x: {
            ticks: {
              color: 'black'
            }
          },
          y: {
            ticks: {
              color: 'black',
              callback: function(value, index, values) {
              return '$' + value; // Tambahkan simbol dolar ke setiap nilai pada sumbu y
            }
            }
          }
        }
      };

      // Inisialisasi chart
      var myChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
      });
    });
  </script>
</html>