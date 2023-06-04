<body>
<!-- carousel -->
<div class="floating-btn whatsapp">
  <a href="https://api.whatsapp.com/send/?phone=%2B6285326212804&text&type=phone_number&app_absent=0" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

<div class="floating-btn instagram">
  <a href="https://www.instagram.com/riven.laser/?igshid=MzRlODBiNWFlZA==" target="_blank">
    <i class="fab fa-instagram"></i>
  </a>
</div>

<div class="floating-btn tiktok">
  <a href="https://www.tiktok.com/@riven.laser" target="_blank">
    <i class="fab fa-tiktok"></i>
  </a>
</div>


<br> <br>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="absolute-div">
                <img src="./img/banner1.jpg" class="d-block w-100" alt="First slide">  
                <div class="carousel-caption">
                    <h3></h3>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/banner2.jpg" class="d-block w-100" alt="Second Slide">
        </div>
        <div class="carousel-item">
            <img src="./img/banner3.jpg" class="d-block w-100" alt="Third Slide">
        </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
</div>

<!-- konten -->
<div class="container">
    <div class="row">
    <br> <br>
        <div class="col-12 col-sm-12 col-md-12" style="font-size: 18px; " align="center">
            <p style="font-weight: bold;" id="produk"> <br> <br> PRODUK KAMI</p> <hr class="mb-5" color=#000000 width="180px"> 
        </div>
    </div>
    <div class="row">
        <?php 
            $sql = $conn->query('SELECT * FROM PRODUK ORDER BY ID_PRODUK');
            while ($row = $sql->fetch_array()) {
        ?>
        <div class="col-6 col-sm-4 col-md-3">
            <div class="card mb-4 shadow-sm" data-nama="<?php echo $row['nama'] ?>">
                <a data-toggle="modal" data-target="#modal<?php echo $row['id_produk'] ?>"><?= "<img style='height: 260%; width: 260%;' class='img-fluid' src='./img/upload/" .$row['gambar1']. "'>" ?></a>
                <div class="card-body">
                    <a href="#"data-toggle="modal" data-target="#modal<?php echo $row['id_produk'] ?>"><b><?php echo $row['nama'] ?></b></a>
                    <p class="card-text"><?php echo $row['harga'] ?></p>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modal<?php echo $row['id_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header" style="background-color: #002A53;">
                        <p style="font-size: 20px; color: #ffffff;"><?php echo $row['nama']; ?></p>
                        <button style="color: #ffffff;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6">
                                    <?= "<img class='img-fluid' src='./img/upload/" .$row['gambar1']. "'>" ?>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6">
                                    <?= "<img class='img-fluid' src='./img/upload/" .$row['gambar2']. "'>" ?>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6">
                                    <?= "<img class='img-fluid' src='./img/upload/" .$row['gambar3']. "'>" ?>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6">
                                    <?= "<img class='img-fluid' src='./img/upload/" .$row['gambar4']. "'>" ?>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <p style="font-size: 20px;"><?php echo $row['harga']; ?></p> 
                            </div>
                            <div class="row">
                                <p style="font-size: 20px;">Deskripsi Produk</p> 
                            </div>
                            <div class="row">
                                <p style="font-size: 20px;"><?php echo $row['deskripsi']; ?></p> 
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a style="font-size: 30px; color: dodgerblue;" href="https://www.tiktok.com/@riven.laser"><i class="fab fa-tiktok"></i> </a> 
                        <a style="font-size: 30px; color: dodgerblue;" href="https://www.instagram.com/riven.laser/"><i class="fab fa-instagram"></i> </a> 
                        <a style="font-size: 30px; color: dodgerblue;" href="https://api.whatsapp.com/send/?phone=%2B6285326212804&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i> </a>
                        <button type="button" class="btn btn-danger ml-auto" data-dismiss="modal" style="font-size: 18px; background-size: 2vw;">Close</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <br> <br> 
    <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <img class="responsive" src="./img/open.jpg" style="margin-top: 20;">
            </div>
        </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12" style="font-size: 18px;" align="center">
            <p style="font-weight: bold;" id="tentang"><br> <br>TENTANG</p> <hr class="mb-5" color=#000000 width="180px"> 
        </div>
    </div>
    <div class="row" style="display: flex; justify-content: center; align-items: center;">
        <div class="col-8 col-sm-8 col-md-8">
            <div class="card mb-4 shadow-sm">
                <a href="./img/riven.jpg" class="card-img-top" src="./img/riven.jpg" data-lightbox="image-1" data-title="Mesin Riven Laser"></a><img class="card-img-top" src="./img/riven.jpg" data-lightbox="image-1" data-title="Mesin Riven Laser">
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <p style="font-size: 17px;" class="tentang">APA ITU RIVEN LASER ?</p>
                    <p style="font-size: 16px;" class="card-text tentang1">Riven Laser terletak di Jl. DR. Soetomo, Griya Prajamukti, Sebelah Barat Alun alun Hanggawana, Kec. Slawi, Kabupaten Tegal, Jawa Tengah. 
                        Riven Laser merupakan jasa pembuatan aneka kerajinan dari akrilik, Seperti Huruf Timbul, Neon Box, Neon Flex, Plakat, dll. </p>
                </div>
            </div>
        </div>
    </div>
    <br> <br>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12" style="font-size: 18px;" align="center">
            <p style="font-weight: bold;">LOKASI</p> <hr class="mb-5"  color=#000000 width="180px">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 mb-4" style="font-size: 2.5vw; margin-top: -10px; " align="center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.50837356014517!2d109.12356034014127!3d-6.993497516624465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbfcc22991d9d%3A0xc1f431a316141b74!2sRiven%20Laser%20Slawi!5e0!3m2!1sid!2sid!4v1684318090516!5m2!1sid!2sid" class="w-50" style="border:0;height: 250px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    </div> <br>

    <script src="./assets/lightbox2-2.11.4/dist/js/lightbox.js"></script>
    
    <script>
    $(document).ready(function() {
        // Event listener untuk input pencarian
        $('#searchInput').on('keyup', function(event) {
        var searchValue = $(this).val().toLowerCase();
        
        // Loop melalui setiap card
        $('.card').each(function() {
            var cardNama = $(this).data('nama').toLowerCase();
            
            // Periksa apakah nama produk card cocok dengan pencarian
            if (cardNama.includes(searchValue)) {
            $(this).show(); // Tampilkan card jika cocok
            } else {
            $(this).hide(); // Sembunyikan card jika tidak cocok
            }
        });
        // Alihkan pengguna ke halaman dengan ID "produk"
        window.location.href = '#produk';
        });
    });
    </script>


</body>