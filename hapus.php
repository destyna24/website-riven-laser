<?php

include('koneksi_msql.php');

if (isset($_GET['id'])){
    $id_produk = $_GET['id'];
    
    $result =  $conn->query("DELETE FROM produk WHERE id_produk = '$id_produk'");
    if ($result) {
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Menghapus Data</div>';
        header("location: admin_home.php");
    } else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Menghapus Data</div>';
        header("location: admin_home.php");
    }
}
?>
