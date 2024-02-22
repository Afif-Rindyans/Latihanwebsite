<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id_mobil = $_GET['id'];

    // Query SQL untuk menghapus data
    $query = "DELETE FROM detail_kendaraan WHERE id_mobil = '$id_mobil'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $orderan = $_GET['id'];

    // Query SQL untuk menghapus data
    $query = "DELETE FROM pemesanan WHERE orderan = '$orderan'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

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
?>