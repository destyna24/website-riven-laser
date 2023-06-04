<?php

include('koneksi_msql.php');

if(isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $deskripsi_produk = $_POST['deskripsi_produk'];
    $gambar1 = $_FILES['gambar1'];
    $gambar2 = $_FILES['gambar2'];
    $gambar3 = $_FILES['gambar3'];
    $gambar4 = $_FILES['gambar4'];
    $namagambar1 = $gambar1['name'];
    $namagambar2 = $gambar2['name'];
    $namagambar3 = $gambar3['name'];
    $namagambar4 = $gambar4['name'];

    $upload1 = move_uploaded_file($gambar1['tmp_name'], './img/upload/'.$gambar1['name']);
    $upload2 = move_uploaded_file($gambar2['tmp_name'], './img/upload/'.$gambar2['name']);
    $upload3 = move_uploaded_file($gambar3['tmp_name'], './img/upload/'.$gambar3['name']);
    $upload4 = move_uploaded_file($gambar4['tmp_name'], './img/upload/'.$gambar4['name']);
    
    $result =  $conn->query("INSERT INTO produk(nama,harga,deskripsi,gambar1,gambar2,gambar3,gambar4) VALUES 
    ('$nama_produk','$harga_produk','$deskripsi_produk','$namagambar1','$namagambar2','$namagambar3','$namagambar4')");
    if ($result) {
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Menambah Data</div>';
        header("location: admin_home.php");
    } else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Menambah Data</div>';
        header("location: tambah_produk.php?id=1");
    }
}
?>
