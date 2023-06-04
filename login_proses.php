<?php
include('koneksi_msql.php');
if (isset($_POST)){
    // Ambil data dari form login
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Query untuk memeriksa username dan password yang cocok
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    

    // Periksa apakah query berhasil dieksekusi dan jumlah baris yang ditemukan lebih dari 0
    if (mysqli_num_rows($result) > 0) {
        // Login berhasil
        // Lakukan tindakan yang diperlukan, seperti mengatur sesi atau mengalihkan pengguna ke halaman berikutnya
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = true;
        header("location: admin_home.php");
    } else {
        // Login gagal
        header("location: login.php?pesan=gagal");
    }
}
// Close the connection
// mysqli_close($conn);
?>