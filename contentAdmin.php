<body>
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="pt-5">
            <h3 class="text-center"><b style="font-size: 3vw;" >Daftar Produk</b></h3>
            <?php if(!empty($_SESSION['message'])) {
                echo $_SESSION['message'];
                $_SESSION['message']= null;
            } ?>
        </div>
        <div class="card mt-5">
            <div class="card-header">
                <a class="btn btn-primary float-right" href="tambah_produk.php" style="font-size: 16px;"><i class="fas fa-plus"></i> Tambah Produk</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <td><b>No</b></td>
                            <td><b>Nama Produk</b></td>
                            <td><b>Gambar 1</b></td>
                            <td><b>Gambar 2</b></td>
                            <!-- <td><b>Gambar 3</b></td>
                            <td><b>Gambar 4</b></td> -->
                            <td><b>Aksi</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $counter = 1; // Inisialisasi variabel counter
                        $sql = $conn->query('SELECT * FROM PRODUK ORDER BY ID_PRODUK');
                        while ($row = $sql->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $counter ?></td>
                            <td><b><?php echo $row['nama'] ?></b></td>
                            <td><?= "<img class='img-fluid rounded-start' src='./img/upload/" .$row['gambar1']. "'>" ?></td>
                            <td><?= "<img class='img-fluid rounded-start' src='./img/upload/" .$row['gambar2']. "'>" ?></td>
                            <!-- <td><?= "<img class='img-fluid rounded-start' src='./img/upload/" .$row['gambar3']. "'>" ?></td>
                            <td><?= "<img class='img-fluid rounded-start' src='./img/upload/" .$row['gambar4']. "'>" ?></td> -->
                            <td>
                                <a href="ubah_produk.php?id=<?= $row['id_produk'];?>" class="btn btn-primary btn-block" style="font-size: 1.5vw;">Ubah</a>
                                <a href="detail.php?id=<?= $row['id_produk'];?>" class="btn btn-secondary btn-block" style="font-size: 1.5vw;">Detail</a>
                                <a href="hapus.php?id=<?= $row['id_produk'];?>" class="btn btn-danger btn-block" style="font-size: 1.5vw;"onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        $counter++; // Increment variabel counter
                        } ?>
                   </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        // Event listener untuk input pencarian
        $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
        });
    });
    </script>

</body>