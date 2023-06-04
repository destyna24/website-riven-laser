<?php 

include('koneksi_msql.php');
if (!$_SESSION['login']){
    header("location: signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head_admin.php') ?>
</head>
<body>
        <div class="container" >
            <div class="row-center" style="margin-top: 80px;" align="center" >
                <div class="card-center" style="width: 6rem;" >
                    <img src="./img/profil.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"style="font-size: 1.5vw;">Admin</p>
                        </div>
                </div>
            </div>
            <div class="row" >
            <?php if(!empty($_SESSION['message'])) {
                echo $_SESSION['message'];
                $_SESSION['message'] = null;
            } ?>
                <div class="col-12 col-sm-12 col-md-12" style="margin-top: 40px;" >
                  <div class="card text-left">
                    <div class="card-header" style="background-color: #002A53;">
                      <h6 style="color: #FFFFFF; font-size: 1.5vw;" >Profil Anda</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <?php 
                                $sql = $conn->query("SELECT * FROM user WHERE id='".$_SESSION['id'] ."'");
                                while ($row = $sql->fetch_array()) {
                            ?>
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group ">
                                        <label for="inputUsername">Username</label>
                                        <input type="username" class="form-control" style="font-size: 1.2vw;" id="username" name="username" placeholder="Username" value="<?php echo $row['username']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" style="font-size: 1.2vw;" id="password" name="password" placeholder="Password" value="<?php echo $row['password']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        Ubah Password? <a href="ubah_profil_admin.php?id=<?php echo $row['id']; ?>">Ubah</a>
                    </div> 
                </div>
                <?php } ?>
                </div>  
            </div>
        </div> 
        <div style="margin-top: 50px;"></div>
<?php include_once('footer.php'); ?>
</body>
</html>
 

