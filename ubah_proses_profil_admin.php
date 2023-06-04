<?php

include('koneksi_msql.php');

if(isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $result =  $conn->query("UPDATE user SET password='$password' WHERE id='$id'");
    if ($result) {
        $_SESSION['message'] = '<div class="alert alert-succes" role="alert">Berhasil Mengubah Data</div>';
        header("location: profil_admin.php?id=1");
    } else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Mengubah Data</div>';
        header("location: ubah_profil_admin.php?id=");
    }
}
?>
