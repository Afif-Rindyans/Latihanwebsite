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
  width: ; /* Sesuaikan lebar kolom Action sesuai kebutuhan */
}

/* Gaya Link Action */
.nobr {
  white-space: nowrap;
}

/* Hover Effect pada Baris Tabel */
.table tbody tr:hover {
  background-color: #f5f5f5;
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

    <title>Admin</title>
  </head>
  <body class="" style="background-image: url('images/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
  
  
  <div class="pos-fixed-top">
    <nav class="navbar navbar-light gradient">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    


 


  
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

  </body>
  

</html>

<?php
include "koneksi.php";
$id_mobil=1; // Ganti dengan ID mobil yang sesuai

$ambildata = mysqli_query($koneksi,"select * from chat_visitor");
while ($tampil = mysqli_fetch_array($ambildata)){
    echo "
        <tr>
        <td>
    ";
}

?>

<div class="row table bingkai">
    <div class="col-sm-12" align="justify">
        <h1 class="page-header text-center">CHAT</h1>
        <div class="table-container">
        <table class="table pinggir" border="1">
            <thead>
                <tr class="heading">
                    <th>ID</th>
                    <th>Email Pengirim</th>
                    <th>Nama Pengirim</th>
                    <th>pesan Yang Disampaikan</th>
                    <th class=" no-link last">
                        <span class ="nobr">Action</span>
                        

                    </th>
                    


                </tr>

<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $chat = $_GET['id'];

  // Query SQL untuk menghapus data
  $query = "DELETE FROM chat_visitor WHERE email = '$chat'";
  $result = mysqli_query($koneksi, $query);

  if ($result) {
      echo "Data berhasil dihapus.";
  } else {
      echo "Error: " . mysqli_error($koneksi);
  }
}

$no=1; // Ganti dengan ID mobil yang sesuai

$ambildata = mysqli_query($koneksi,"select * from chat_visitor");
while ($tampil = mysqli_fetch_array($ambildata)){
    echo "
        <tr>
        <td>$no</td>
        <td>$tampil[email]</td>
        <td>$tampil[nama]</td>
        <td>$tampil[chat]</td>
        <td><button class='hapus-btn' data-id='{$tampil['email']}'>Hapus</button></td>
        <tr>";

        $no++;
}

?>


            </thead>
            <tbody>
                
            
               
            </tbody>

        </table>
</div>
    </div>

</div>
<div class="persegi-panjang">
      <div class="container text-center pt-5">
      <a class="btn btn-custom rounded mb-5 text-black" href="dashboard.php" style="width: 80%; " role="button"><h6>Home Admin</h6></a>
        <a class="btn btn-custom rounded mb-5 text-black" href="datamobil.php" style="width: 80%; " role="button"><h6>Data Mobil</h6></a>
        <a class="btn  btn-custom rounded mb-5" href="tambahkendaraan.php"  style="width: 80%; " role="button">Tambah</a>
        <a class="btn btn-custom rounded mb-5" href="datapembelian.php"  style="width: 80%; " role="button">Data Order</a>
        <a class="btn btn-custom rounded mb-5" href="chat.php"  style="width: 80%; " role="button">Pesan</a>
        <a class="btn btn-custom rounded mb-5" href="saham.php"  style="width: 80%; " role="button">Saham Perusahaan</a>
      </div>
    </div>  

  </div>
