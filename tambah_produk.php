<?php 
include('koneksi_msql.php');
if(!$_SESSION['login']) {
    header("location: admin_home.php");
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
            <h3 class="text-center" ><b style="font-size: 3vw;" > Tambah Produk</b></h3>
            <?php if(!empty($_SESSION['message'])) {
                echo $_SESSION['message'];
                $_SESSION['message'] = null;
            } ?>
        </div>
        <div class="card mt-5">
            <form method="POST" action="tambah_proses.php" enctype="multipart/form-data">
                <div class="card-body">
                    <!-- <div class="form-group" style="font-size: 1.5vw;">
                        <label >Id Produk</label>
                        <input type="number" name="id_produk" id="id_produk" class="form-control" placeholder="Masukkan ID HOTEL..." disabled>
                        <input type="hidden" name="id_produk" id="id_produk" value="<?php echo $id_produk; ?>" >
                    </div> -->
                    <div class="form-group" style="font-size: 1.5vw;">
                        <label for="nama">Nama Produk</label>
                        <input style="text-transform:uppercase;" type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan Nama Produk..." required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="harga">Harga</label>
                        <input name="harga_produk" id="harga_produk" class="form-control" placeholder="Masukkan Harga..." required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi_produk" id="deskripsi_produk" class="form-control" placeholder="Masukkan Deskripsi Produk..." required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="foto_hotel">Gambar 1</label>
                        <input type="file" name="gambar1" id="gambar1" class="form-control" required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="foto_hotel">Gambar 2</label>
                        <input type="file" name="gambar2" id="gambar2" class="form-control" required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="foto_hotel">Gambar 3</label>
                        <input type="file" name="gambar3" id="gambar3" class="form-control" required>
                    </div>
                    <div class="form-group"style="font-size: 1.5vw;">
                        <label for="foto_hotel">Gambar 4</label>
                        <input type="file" name="gambar4" id="gambar4" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button style="font-size: 1.5vw;" type="button" class="btn btn-danger" onclick="history.back()">Batal</button>
                    <input style="font-size: 1.5vw; background-color: #007BFF; color: #ffffff;" type="submit" name="submit" class="btn btn-succes" value="SIMPAN" onclick="return confirm('Apakah anda yakin?')"/>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('footer_admin.php'); ?>
</body>
</html>