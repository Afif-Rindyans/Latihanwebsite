<?php 
  $BASE_URL="../../../..";

  include "$BASE_URL/app/dotenv.php";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/app/config/api/api.php";
  include "$BASE_URL/components/navbar_dashboard.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
      body {
        animation: transition 0.8s;
      }

      .gradient {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;
      }

      .persegi-panjang {
        width: 250px; 
        height: 100%; 
        background-image: linear-gradient(to bottom, #1c1814, #494947);
        transform: translateX(-100%);
        transition: 1s;
      }

      .btn-custom {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
      }

      .persegi-panjang.active {
        transform: translateX(0); 
      }

      .chart-container {
        width: 100%;
        height: 80%;
        position: absolute;
        top: 50px;
        left: 50px;
        background-color: #ffffff; 
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Saham Perusahaan</title>
  </head>

  <body style="background-image: url('<?=$BASE_URL?>/public/cars/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="pos-fixed-top">
      <?=Navbar()?>
    
      <div class="container mt-5 chart-container">
        <canvas id="bitcoinChart"></canvas>
      </div>

      <?=Navigation($path)?>
    </div>
  </body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <?=ShowNavigation()?>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Ambil referensi ke elemen canvas
      var ctx = document.getElementById('bitcoinChart').getContext('2d');

      // Buat objek chart menggunakan Chart.js
      var bitcoinChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: getStoredLabels(),  // Label sumbu X (waktu)
          datasets: [{
            label: 'Harga Bitcoin',
            data: getStoredData(),   // Data harga Bitcoin
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false,
            fontWeight: 'bold'
          }]
        },
        options: {
          scales: {
            x: [{
              type: 'linear',
              position: 'bottom'
            }]
          }
        }
      });

      // Fungsi untuk menambahkan data baru ke chart dan menyimpannya di localStorage
      function addDataToChart(time, price) {
        bitcoinChart.data.labels.push(time);
        bitcoinChart.data.datasets[0].data.push(price);
        updateStoredData();
        bitcoinChart.update();
      }

      // Fungsi untuk memperbarui data dari localStorage
      function updateStoredData() {
        localStorage.setItem('bitcoinLabels', JSON.stringify(bitcoinChart.data.labels));
        localStorage.setItem('bitcoinData', JSON.stringify(bitcoinChart.data.datasets[0].data));
      }

      // Fungsi untuk mendapatkan data dari localStorage
      function getStoredLabels() {
        const storedLabels = localStorage.getItem('bitcoinLabels');
        return storedLabels ? JSON.parse(storedLabels) : [];
      }

      function getStoredData() {
        const storedData = localStorage.getItem('bitcoinData');
        return storedData ? JSON.parse(storedData) : [];
      }

      // Fungsi untuk memperbarui data dari API dan menambahkannya ke chart
      function updateChartData() {
        const apiKey = '<?=$api_key?>';
        const apiUrl = '<?=$api_url?>';

        fetch(apiUrl, {
          method: 'GET',
          headers: {
            'X-CMC_PRO_API_KEY': apiKey,
            'Content-Type': 'application/json',
          },
        })
        .then(response => response.json())
        .then(data => {
          // Handle data response dari Coin Marketcap
          console.log(data);

          // Ambil harga Bitcoin dari data (misalnya, menggunakan data harga Bitcoin dalam USD)
          const bitcoinPrice = data.data[0].quote.USD.price;

          // Ambil waktu sekarang
          const time = new Date().toLocaleTimeString();

          // Tambahkan data ke chart
          addDataToChart(time, bitcoinPrice);
        })
        .catch(error => {
          console.error('Error fetching data from Coin Marketcap:', error);
        });
      }

      // Perbarui data dari API dan tambahkan ke chart setiap 4000 milidetik (4 detik)
      setInterval(updateChartData, 4000);
    });
  </script>
</html>