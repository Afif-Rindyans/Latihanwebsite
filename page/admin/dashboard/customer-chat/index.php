<?php
  $BASE_URL="../../../..";

  include "$BASE_URL/app/dotenv.php";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/app/config/database/connect.php";
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

      /* Gaya Tabel */
      .bingkai {
        border-collapse: collapse;
        margin-bottom: 20px;
        position: absolute;
        background-color: #5BF64E;
        opacity: 1;
        top: 75px;
        left: 100px;
      }

      .pinggir{
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
      .table tr {
        width: auto; /* Sesuaikan lebar kolom Action sesuai kebutuhan */
      }

      /* Gaya Link Action */
      .nobr {
        white-space: nowrap;
      }

      /* Hover Effect pada Baris Tabel */
      .table tbody tr:hover {
        background-color: #f5f5f5;
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

      .table-container {
        overflow-x: auto;
        overflow-y: auto;
        max-height: 300px;
        max-width: 100%;
      }

      .table.pinggir {
        width: 100%; 
      }

      .row.table.bingkai{
        width: 80%
      }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Chat Pelanggan</title>
  </head>
  <body style="background-image: url('<?=$BASE_URL?>/public/cars/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="pos-fixed-top">
      <?=Navbar()?>

      <div class="row table bingkai">
        <div class="col-lg-12" align="justify">
          <h1 class="page-header text-center">CHAT</h1>
          
          <div class="table-container">
            <table class="table pinggir" border="1">
              <thead>
                <tr class="heading">
                  <th>No</th>
                  <th>Email Pengirim</th>
                  <th>Nama Pengirim</th>
                  <th>Pesan Yang Disampaikan</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $sql = mysqli_query($connection,"SELECT * FROM chat_visitors");
                  while ($car = mysqli_fetch_array($sql)) {
                    echo "
                      <tr>
                        <td>$car[chat_id]</td>
                        <td>$car[email]</td>
                        <td>$car[name]</td>
                        <td>$car[chat]</td>
                        <td>$car[created_at]</td>
                      </tr>
                    ";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <?=Navigation($path)?>
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
        var orderan = $(this).data('id');

        // Konfirmasi penghapusan
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
          // Kirim permintaan AJAX untuk menghapus data
          $.ajax({
            type: 'GET',
            url: 'hapus.php?id=' + orderan,
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
