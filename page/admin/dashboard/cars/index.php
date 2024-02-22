<?php 
  $BASE_URL="../../../..";
  
  include "$BASE_URL/app/dotenv.php";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/app/config/database/connect.php";
  include "$BASE_URL/components/navbar_dashboard.php";

  if (isset($_GET['id'])) {
    $id_mobil = $_GET['id'];

    // Query SQL untuk menghapus data
    $query = "DELETE FROM cars_detail WHERE car_id = '$id_mobil'";
    $result = mysqli_query($connection, $query);

    if ($result) {
      echo "Data berhasil dihapus.";
    } else {
      echo "Error: " . mysqli_error($connection);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
      body{
        animation: transition 0.8s;
      }

      .gradient {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;
      }

      .persegi-panjang {
        width: 250px; /* Atur lebar sesuai kebutuhan */
        height: 125%; /* Atur tinggi sesuai kebutuhan */
        background-image: linear-gradient(to bottom, #1c1814, #494947);
        transform: translateX(-100%);
        transition: 1s;
        position: absolute;
      }

      .btn-custom {
        background-image: linear-gradient(to right, #f1c81d, #f16610);
      }

      .persegi-panjang.active {
        transform: translateX(0); /* Atur nilai transformasi yang sesuai saat kelas active */
      }

      .badan {
        width:110%;
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

      /* Gaya Tabel */
      .bingkai {
        width: 50%;
        border-collapse: collapse;
        margin-bottom: 20px;
        position: absolute;
        background-color: #5BF64E;
        opacity: 1;
        top: 75px;
        left: 100px;
      }

      .pinggir {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      }

      .table th, .table td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
      }

      .table th {
        background-color: #f2f2f2;
      }

      /* Gaya Heading Tabel */
      .heading th {
        background-color: #333;
        color: white;
      }

      /* Gaya Kolom Action */
      .last {
        width: 75px; /* Sesuaikan lebar kolom Action sesuai kebutuhan */
      }

      /* Gaya Link Action */
      .nobr {
        white-space: nowrap;
      }

      /* Hover Effect pada Baris Tabel */
      .table tbody tr:hover {
        background-color: #f5f5f5;
      }

      .table-container {
        overflow-x: auto;
        overflow-y: auto;
        max-height: 70%;
        max-width: 100%;
      }

      .table.pinggir {
        width: 100%; 
        height: 120%;
      }

      .row.table.bingkai{
        height: 120%;
      }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>List Mobil</title>
  </head>

  <body class="badan" style="background-image: url('images/bg.jpg'); background-repeat: no-repeat;">
    <div class="pos-fixed-top">
      <?=Navbar()?>


      <div class="row table bingkai">
        <div class="col-lg-12" align="justify">
          <h1 class="page-header text-center">DATA KENDARAAN</h1>
          
          <div class="table-container">
            <table class="table pinggir" border="1">
              <thead>
                <tr class="heading">
                  <th>No</th>
                  <th>MEREK MOBIL</th>
                  <th>HARGA</th>
                  <th>TIPE KENDARAAN</th>
                  <th>TIPE MESIN</th>
                  <th>KAPASITAS MESIN</th>
                  <th>BAHAN BAKAR</th>
                  <th>TENAGA MESIN</th>
                  <th>JENIS TRANSMISI</th>
                  <th>JENIS TURBO</th>
                  <th>GAMBAR KENDARAAN</th>
                  <th class=" no-link last">
                    <span class ="nobr">Action</span>
                  </th>  
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no=1;

                  $sql = mysqli_query($connection,"SELECT * FROM cars_detail");
                  while ($car = mysqli_fetch_array($sql)) {
                    echo "
                      <tr>
                        <td>$no</td>
                        <td>$car[brand]</td>
                        <td>$car[price]</td>
                        <td>$car[type_car]</td>
                        <td>$car[type_engine]</td>
                        <td>$car[oil_capacity]</td>
                        <td>$car[fuel]</td>
                        <td>$car[engine_power]</td>
                        <td>$car[type_transmission]</td>
                        <td>$car[type_turbo]</td>
                        <td>
                          <img class='card-img-top' src='$BASE_URL/public/cars/".$car["car_image"]."'>
                        </td>
                        <td>
                          <button class='hapus-btn' data-id='{$car['car_id']}'>Hapus</button>
                        </td>
                      </tr>
                    ";

                    $no++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <?=Navigation($path)?>
    </div>
  </body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <?=ShowNavigation()?>

  <script>
    $(document).ready(function () {
      // Tangkap klik tombol hapus
      $('.hapus-btn').click(function () {
        // Ambil nilai atribut 'data-id'
        var idMobil = $(this).data('id');

        // Konfirmasi penghapusan
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
          // Kirim permintaan AJAX untuk menghapus data
          $.ajax({
            type: 'GET',
            url: 'hapus.php', // Ganti dengan nama file PHP yang menangani penghapusan
            data: { id: idMobil },
            success: function (response) {
              // Tampilkan pesan atau perbarui tampilan setelah penghapusan berhasil
              alert(response);
              // Contoh: Memuat ulang halaman setelah penghapusan berhasil
              location.reload();
            },
              error: function (xhr, status, error) {
                console.error('Error:', error);
              }
          });
        }
      });
    });
  </script>
</html>

