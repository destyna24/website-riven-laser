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
            <h3 class="text-center" ><b style="font-size: 3vw;" >Ubah Produk</b></h3>
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
                        <input type="hidden" name="id_produk" id="id_produk" value="<?php echo $id_produk; ?>" >
                    </div>
                    <div class="form-group" style="font-size: 1.5vw;">
                        <label for="nama">Nama Produk</label>
                        <input style="text-transform:uppercase;" type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan Nama Produk..." value="<?php echo $nama_produk; ?>" required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="harga">Harga</label>
                        <input name="harga_produk" id="harga_produk" class="form-control" placeholder="Masukkan Harga..." value="<?php echo $harga_produk; ?>" required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi_produk" id="deskripsi_produk" class="form-control" placeholder="Masukkan Deskripsi Produk..." value="<?php echo $deskripsi_produk; ?>" required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label>Gambar 1</label>
                        <p><?= "<img style='height: 150px; width: 150px;' class='img-fluid rounded-start' src='./img/upload/" .$gambar1. "'>" ?></p>
                        <input type="file" name="gambar1" id="gambar1" class="form-control" value="<?php echo $gambar1; ?>" required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label>Gambar 2</label>
                        <p><?= "<img style='height: 150px; width: 150px;' class='img-fluid rounded-start' src='./img/upload/" .$gambar2. "'>" ?></p>
                        <input type="file" name="gambar2" id="gambar2" class="form-control" value="<?php echo $gambar2; ?>" required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label>Gambar 3</label>
                        <p><?= "<img style='height: 150px; width: 150px;' class='img-fluid rounded-start' src='./img/upload/" .$gambar3. "'>" ?></p>
                        <input type="file" name="gambar3" id="gambar3" class="form-control"value="<?php echo $gambar3; ?>" required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label>Gambar 4</label>
                        <p><?= "<img style='height: 150px; width: 150px;' class='img-fluid rounded-start' src='./img/upload/" .$gambar4. "'>" ?></p>
                        <input type="file" name="gambar4" id="gambar4" class="form-control"value="<?php echo $gambar4; ?>" required>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button style="font-size: 1.5vw;" type="button" class="btn btn-danger" onclick="history.back()">Batal</button>
                    <input style="font-size: 1.5vw; background-color: #007BFF; color: #ffffff;" type="submit" name="submit" class="btn btn-succes" value="SIMPAN" onclick="return confirm('Apakah anda yakin?')"/>
                </div>
            </form>
        </div>
    </div>
<?php include('footer_admin.php'); ?>
</body>
</html>