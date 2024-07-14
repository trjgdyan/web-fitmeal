<?php
require_once 'connection.php';
require_once 'layout/header.php';
$result = mysqli_query($connection, "SELECT * FROM produk");
?>


        <!-- Jumbotron -->
        <div class="container-fluid d-flex align-items-center justify-content-center">
                <div class="container text-center text-white">
                        <!-- <i data-feather="coffee"></i> -->
                        <img src="assets/image/gambar2.png" class="pict" alt="foodies" />
                        <h1 class="display-6">Selamat Datang, yuk makan enak!</h1>
                        <p class="lead">
                                Gausa mikir gemuk. Yang penting perut nyaman dan tidur nyenyak karena
                                kenyang.
                        </p>
                        <a href="#menuMakanan" class="btn btn-primary">Pesan Sekarang</a>
                </div>
        </div>

        <!-- End Jumbotron -->
        <!-- Content -->

        <!-- Page : Apa aja didaerah -->
        <div class="container" id="menuMakanan">
                <h1 class="text-center my-5">Apa aja nih yang enak di Sukosari?</h1>
                <p class="text-center fs-5">
                        Yuk cek koleksi makanan populer, favorit foodies local, dan penawaran terbaik kami di lokasimu!
                </p>

                <div class="row row-cols-1 row-cols-md-4">
                        <?php
                        while ($data = mysqli_fetch_array($result)) :
                        ?>
                        <div class="col mb-4">
                                <div class="card">
                                
                                <?php echo "<img src='assets/gambar/$data[foto]'class= 'card-img-top p-3 menu'/>";?>

                                <div class="card-body">
                                <h5 class="card-title"><?= $data['namaBarang'] ?></h5>
                                <h6 class="card-title"><?= $data['harga'] ?></h6>
                                <p class="card-text"><?= $data['deskripsi'] ?></p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                <a class="btn btn-sm btn-info" href="pesanMenu.php?id=<?= $data['id'] ?>">
                                <i data-feather="shopping-cart"></i>
                                </a>
                                <a href="pesanMenu.php?id=<?= $data['id'] ?>" class="btn btn-primary ml-1">Order</a>
                                </div>
                        </div>
                        </div>
                        <?php
                        endwhile;
                        ?>
                </div>
                </div>
        </div>


      <?php
      require_once 'layout/footer.php'
      ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>
                feather.replace();
        </script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>