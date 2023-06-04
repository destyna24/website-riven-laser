<?php 
include('koneksi_msql.php');
if(!$_SESSION['login']) {
    header("location: signin.php");
}
// Mengambil data dari tabel
$result =  $conn->query("SELECT * FROM user WHERE id='".$_SESSION['id'] ."'");
while ($row = $result->fetch_array()){
    $username = $row['username'];
    $password = $row['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head_admin.php'); ?>
</head>
<body>
    <div class="container" style="margin-bottom: 100px;">
        <div class="pt-5">
            <?php if(!empty($_SESSION['message'])) {
                echo $_SESSION['message'];
                $_SESSION['message'] = null;
            } ?>
        </div>
        <div class="container" >
            <div class="row-center" style="margin-top: 80px;" align="center" >
                <div class="card-center" style="width: 6rem;" >
                    <img src="./img/profil.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"style="font-size: 1.5vw;">Admin</p>
                        </div>
                </div>
            </div>
        <div class="card mt-5">
            <form method="POST" action="ubah_proses_profil_admin.php" >
            
            <div class="row" >
                <div class="col-12 col-sm-12 col-md-12" >
                  <div class="card text-left">
                    <div class="card-header" style="background-color: #002A53;">
                      <h6 style="color: #FFFFFF; font-size: 1.5vw;" >Ubah Profil Admin</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group ">
                                        <label for="inputUsername">Username</label>
                                        <input type="text" class="form-control" style="font-size: 1.2vw;" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" style="font-size: 1.2vw;" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>" required>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="card-footer text-right">
                            <button style="font-size: 1.5vw;" type="button" class="btn btn-danger" onclick="history.back()">Batal</button>
                            <input style="font-size: 1.5vw;"type="submit" name="submit" class="btn btn-succes" value="SIMPAN" onclick="return confirm('Apakah anda yakin?')"/>
                        </div>
                    </div>
                </div>  
            </div>
        </div> 
        <div style="margin-top: 100px;">
    </div>
    </div> 
    </div> 
<?php include_once('footer.php'); ?>
</body>
</html>