
<?php
include "koneksi.php";

// Query SQL untuk menghitung jumlah baris dalam tabel 'pemesanan'
$query = "SELECT COUNT(*) AS jumlah_kolom FROM pemesanan";
$result = $koneksi->query($query);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Ambil hasil sebagai asosiatif array
    $row = $result->fetch_assoc();

    // Ambil nilai jumlah baris
    $jumlah_kolom = $row['jumlah_kolom'];


} else {
    echo "Error: " . $koneksi->error;
}

// Tutup koneksi (opsional, tergantung kebutuhan)
$koneksi->close();
?>



<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('myChart').getContext('2d');
            var jumlahPemesanan;

    

            if (!jumlahPemesanan) {
                // Jika tidak ada, set nilai awal
                jumlahPemesanan = <?php echo $jumlah_kolom; ?>;
                localStorage.setItem('jumlahPemesanan', jumlahPemesanan);
            }

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [jumlahPemesanan], //waktu
                    datasets: [{
                        label: 'Jumlah Pemesanan',
                        data: [jumlahPemesanan], //data
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Fungsi untuk menambahkan data baru ke chart dan menyimpannya di localStorage
            function addDataToChart(time, price) {
              var newDataTime = getTime(); // Misalnya, fungsi getTime mengambil waktu terbaru
        var newDataPrice = getPrice(); // Misalnya, fungsi getPrice mengambil data harga terbaru


    jumlahPemesanan.data.labels.push(time);
    jumlahPemesanan.data.datasets[0].data.push(price);
    updateStoredData();
    jumlahPemesanan.update();
  }
   // Fungsi untuk memperbarui data dari localStorage
  function updateStoredData() {
    localStorage.setItem('orderLabels', JSON.stringify(jumlahPemesanan.data.labels));
    localStorage.setItem('orderData', JSON.stringify(jumlahPemesanan.data.datasets[0].data));
  }

  // Fungsi untuk mendapatkan data dari localStorage
  function getStoredLabels() {
    const storedLabels = localStorage.getItem('orderLabels');
    return storedLabels ? JSON.parse(storedLabels) : [];
  }

  function getStoredData() {
    const storedData = localStorage.getItem('orderData');
    return storedData ? JSON.parse(storedData) : [];
  }
  setInterval(addDataToChart, 4000);
        });


    </script>










<style>
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



  .chart-container {
    width: 100%;
    height: 80%;
    position: absolute;
    top: 50px;
    left: 50px;
    background-color: #ffffff; /* Warna putih tanpa transparansi */
    opacity: 0.8;
    border-radius: 8px;
    padding: 10px;
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

    <title>Hello, world!</title>
  </head>
  <body style="background-image: url('images/bg.jpg'); background-size: cover; background-repeat: no-repeat;">

  <div class="pos-fixed-top">
    <nav class="navbar navbar-light gradient">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    

  <div class="container mt-5 chart-container">
    <canvas id="myChart"></canvas>
</div>

<div class="persegi-panjang">
      <div class="container text-center pt-5">
      <a class="btn btn-custom rounded mb-5 text-black" href="index1.php" style="width: 80%; " role="button"><h6>Home Admin</h6></a>
        <a class="btn btn-custom rounded mb-5 text-black" href="datamobil.php" style="width: 80%; " role="button"><h6>Data Mobil</h6></a>
        <a class="btn  btn-custom rounded mb-5" href="tambahkendaraan.php" style="width: 80%; " role="button">Tambah</a>
        <a class="btn btn-custom rounded mb-5" href="chat.php"  style="width: 80%; " role="button">Pesan</a>
        <a class="btn btn-custom rounded mb-5" href="saham.php"  style="width: 80%; " role="button">Saham Perusahaan</a>
      </div>
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>