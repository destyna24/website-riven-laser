<?php 
include('koneksi_msql.php');
if(!$_SESSION['login']) {
    header("location: admin_home.php");
}
// Mengambil data dari tabel
$result =  $conn->query('SELECT * FROM produk WHERE id_produk ='.$_GET['id']);
while ($row = $result->fetch_array()){
    $id_produk = $row['id_produk'];
    $nama_produk = $row['nama'];
    $harga_produk = $row['harga'];
    $deskripsi_produk =$row['deskripsi'];
    $gambar1 = $row['gambar1'];
    $gambar2 = $row['gambar2'];
    $gambar3 = $row['gambar3'];
    $gambar4 = $row['gambar4'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head_admin.php'); ?>
</head>
<body>
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="pt-5">
            <h3 class="text-center" ><b style="font-size: 3vw;" >Detail Produk</b></h3>
            <?php if(!empty($_SESSION['message'])) {
                echo $_SESSION['message'];
                $_SESSION['message'] = null;
            } ?>
        </div>
        <div class="card mt-5">
            <form method="POST" action="ubah_proses.php" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group" style="font-size: 1.5vw;">
                        <label >Id Produk</label>
                        <input type="number" name="id_produk" id="id_produk" class="form-control" placeholder="Masukkan ID HOTEL..." value="<?php echo $id_produk; ?>" disabled>
                    </div>
                    <div class="form-group" style="font-size: 1.5vw;">
                        <label for="nama">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan Nama Produk..." value="<?php echo $nama_produk; ?>" disabled>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="harga">Harga</label>
                        <input name="harga_produk" id="harga_produk" class="form-control" placeholder="Masukkan Harga..." value="<?php echo $harga_produk; ?>" disabled>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi_produk" id="deskripsi_produk" class="form-control" placeholder="Masukkan Deskripsi Produkx..." value="<?php echo $deskripsi_produk; ?>" disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group"style="font-size: 1.5vw;">
                                <label for="foto_hotel">Gambar 1</label>
                                <p><?= "<img style='height: 170px; width: 170px;' class='img-fluid rounded-start' src='./img/upload/" .$gambar1. "'>" ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group"style="font-size: 1.5vw;">
                                <label for="foto_hotel">Gambar 2</label>
                                <p><?= "<img style='height: 170px; width: 170px;' class='img-fluid rounded-start' src='./img/upload/" .$gambar2. "'>" ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group"style="font-size: 1.5vw;">
                                <label for="foto_hotel">Gambar 3</label>
                                <p><?= "<img style='height: 170px; width: 170px;' class='img-fluid rounded-start' src='./img/upload/" .$gambar3. "'>" ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group"style="font-size: 1.5vw;">
                                <label for="foto_hotel">Gambar 4</label>
                                <p><?= "<img style='height: 170px; width: 170px;' class='img-fluid rounded-start' src='./img/upload/" .$gambar4. "'>" ?></p>
                            </div>
                        </div>
                    </div>
                <div class="card-footer text-right">
                    <button style="font-size: 1.5vw;" type="button" class="btn btn-secondary" onclick="history.back()">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('footer_admin.php'); ?>
</body>
</html>