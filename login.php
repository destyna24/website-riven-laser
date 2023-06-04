<?php
//koneksi
include "koneksi_msql.php";
if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
  header("location: admin_home.php");
}
$pesan = NULL;
if(isset($_GET['pesan'])) {
    if($_GET['pesan']=="gagal"){
        $pesan = '<div class="alert alert-danger desk-produk" role="alert">Login Gagal! Username atau Password Salah!</div>';
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin Riven Laser</title>
    <link href="./assets/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="./assets/jQuery/jQuery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                    <img src="https://png.pngtree.com/png-vector/20191009/ourmid/pngtree-user-icon-png-image_1796659.jpg" class="center" alt="Ups tidak muncul">
            </div>
        </div>
        <br>
        <div class="row" style="display: flex; justify-content: center; align-items: center; margin-bottom: 100px;">
            <div class="col-9 col-sm-9 col-md-9">
                <form class="form-signin" name="Login" method="POST" action="login_proses.php">
                    <?php echo $pesan; ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-control" style="font-size: 16px; background-color: #FFFFFF;" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" style="font-size: 16px; background-color: #FFFFFF;" required>
                    </div>
                    <button type="submit" value="Login" class="btn btn-primary" style="font-size: 16px;">Submit</button>
                </form>
            </div>
        </div>
  </div>
        </div>
    </div>
</body>
</html>