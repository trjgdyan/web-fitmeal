<?php
require_once 'connection.php';
require_once 'layout/header.php';
$result = mysqli_query($connection, "SELECT * FROM produk LIMIT 8");
?>

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
        <div class="container">
                <h1 class="text-center text-black m-5 fw-medium fs-2">
                        Belum ada Ide? Mulai dari sini aja dulu
                </h1>

                <!-- Pilihan terdekat, terlaris, menu hemat, terfavorit, 24 jam, menu sehat, pasti promo -->

                <div class="container justify-content-center">
                        <div class="row hstack gap-2">
                                <!-- Card 1: Terdekat -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="assets/image/peta.png" class="card-img-top img-fluid p-1" alt="Terdekat" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Terdekat</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 2: Terlaris -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="assets/image/terlaris.png" class="card-img-top img-fluid p-1" alt="Terlaris" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Terlaris</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 3: Menu Hemat -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="assets/image/menuhemat.png" class="card-img-top img-fluid p-1" alt="Menu Hemat" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Menu Hemat</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 4: Terfavorit -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="assets/image/favorit.png" class="card-img-top img-fluid p-1" alt="Terfavorit" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Terfavorit</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 5: 24 Jam -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="assets/image/24jam.png" class="card-img-top img-fluid p-1" alt="24 Jam" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">24 Jam</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 6: Menu sehat -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="assets/image/menusehat.png" class="card-img-top img-fluid p-1" alt="Terfavorit" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Menu sehat</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 7: Pasti Promo -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="assets/image/pastimurah.png" class="card-img-top img-fluid p-1" alt="Terfavorit" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Pasti Promo</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

        <!-- Page : Aneka Kuliner Menarik -->
        <div class="container">
                <h1 class="text-center my-5">Aneka Kuliner</h1>

                <div class="row">
                        <!-- Menu Ayam Bakar -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="assets/image/ayambakar.png" class="card-img-top rounded-img mx-auto d-block" alt="Ayam Bakar" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Ayam Bakar</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Chinese -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="assets/image/sushi.png" class="card-img-top rounded-img mx-auto d-block" alt="Chinese Food" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Jepun Food</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Seafood -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="assets/image/seafood.png" class="card-img-top rounded-img mx-auto d-block" alt="Seafood" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Seafood</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Dissert -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="assets/image/dessert.png" class="card-img-top rounded-img mx-auto d-block" alt="Dissert" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Dissert</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Minuman -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="assets/image/minuman.png" class="card-img-top rounded-img mx-auto d-block" alt="Minuman" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Minuman</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Siap saji -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="assets/image/siapsaji.png" class="card-img-top rounded-img mx-auto d-block" alt="Siap Saji" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Siap Saji</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>
                </div>

                <div>
                        <a href="menu.php" class="btn btn-outline-danger position-absolute start-50 translate-middle mt-4 rounded-pill">Tampilkan kuliner lainnya</a>
                </div>
        </div>

        <!-- Page : Apa aja didaerah -->
        <div class="container" id="menuMakanan">
                <h1 class="text-center my-5">Apa aja nih yang enak di Sukosari?</h1>
                <p class="text-center fs-5">
                        Yuk cek koleksi makanan populer, favorit foodies local, dan penawaran terbaik kami di lokasimu!
                </p>

                <div class="row row-cols-1 row-cols-md-4">
                        <!-- Menu Ayam Bakar -->
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
                                <a class="btn btn-sm btn-info" href="addCart.php?id=<?= $data['id'] ?>">
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
                <a href="menu.php" class="btn btn-outline-danger position-absolute start-50 translate-middle mt-4 rounded-pill">Tampilkan kuliner lainnya</a>
                 </div>

        <!-- kenapa pesan disini? -->
        <div class="container text-center">
                <h1 class="text-center my-5">Kenapa pesan disini?</h1>
                <div class="row row-cols-1 row-cols-md-4">
                        <!-- pasti enak -->
                        <div class="col mb-4">
                                <div class="card" style="background-color: #9d32ad">
                                        <img src="assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                                        <div class="card-body">
                                                <p class="card-text fs-4 fw-medium my-5 text-white">
                                                        Lorem ipsum dolor sit amet consectetur.
                                                </p>
                                        </div>
                                </div>
                        </div>

                        <div class="col mb-4">
                                <div class="card" style="background-color: #0096b8">
                                        <img src="assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                                        <div class="card-body">
                                                <p class="card-text fs-4 fw-medium my-5 text-white">
                                                        Lorem ipsum dolor sit amet consectetur.
                                                </p>
                                        </div>
                                </div>
                        </div>

                        <div class="col mb-4">
                                <div class="card" style="background-color: #d14393">
                                        <img src="assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                                        <div class="card-body">
                                                <p class="card-text fs-4 fw-medium my-5 text-white">
                                                        Lorem ipsum dolor sit amet consectetur.
                                                </p>
                                        </div>
                                </div>
                        </div>

                        <div class="col mb-4">
                                <div class="card" style="background-color: #d95700">
                                        <img src="assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                                        <div class="card-body">
                                                <p class="card-text fs-4 fw-medium my-5 text-white">
                                                        Lorem ipsum dolor sit amet consectetur.
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <div class="container">
                <p class="text-left">Are you admin? Do you want to add a menu?</p>
                <a href="../inputProduct/index.php">add here</a>
        </div>

        <!-- End Content -->

        <?php
        require_once 'layout/footer.php';
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>
                feather.replace();
        </script>
</body>

</html>