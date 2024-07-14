<?php
require_once 'studi_kasus/connection.php';
$result = mysqli_query($connection, "SELECT * FROM produk LIMIT 8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>FitMeal</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
        <script src="https://unpkg.com/feather-icons"></script>

        <!-- link css -->
        <link rel="stylesheet" href="studi_kasus/assets/style.css" />
</head>


<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                        <a class="navbar-brand" href="#">FitMeal</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                                <a class="nav-link" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="studi_kasus/menu.php">Menu</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="#">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                                <a href="studi_kasus/cart.php" class="nav-link"><i data-feather="shopping-cart"></i>
                                        </li>
                                </ul>
                        </div>
                </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid d-flex align-items-center justify-content-center">
                <div class="container text-center text-white">
                        <!-- <i data-feather="coffee"></i> -->
                        <img src="studi_kasus/assets/image/gambar2.png" class="pict" alt="foodies" />
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
                                                <img src="studi_kasus/assets/image/peta.png" class="card-img-top img-fluid p-1" alt="Terdekat" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Terdekat</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 2: Terlaris -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="studi_kasus/assets/image/terlaris.png" class="card-img-top img-fluid p-1" alt="Terlaris" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Terlaris</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 3: Menu Hemat -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="studi_kasus/assets/image/menuhemat.png" class="card-img-top img-fluid p-1" alt="Menu Hemat" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Menu Hemat</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 4: Terfavorit -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="studi_kasus/assets/image/favorit.png" class="card-img-top img-fluid p-1" alt="Terfavorit" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Terfavorit</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 5: 24 Jam -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="studi_kasus/assets/image/24jam.png" class="card-img-top img-fluid p-1" alt="24 Jam" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">24 Jam</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 6: Menu sehat -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="studi_kasus/assets/image/menusehat.png" class="card-img-top img-fluid p-1" alt="Terfavorit" />
                                                <div class="card-body">
                                                        <h5 class="card-title text-center">Menu sehat</h5>
                                                        <a href="#" class="stretched-link"></a>
                                                </div>
                                        </div>
                                </div>

                                <!-- Card 7: Pasti Promo -->
                                <div class="col-md-2">
                                        <div class="card rounded-2">
                                                <img src="studi_kasus/assets/image/pastimurah.png" class="card-img-top img-fluid p-1" alt="Terfavorit" />
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
                                        <img src="studi_kasus/assets/image/ayambakar.png" class="card-img-top rounded-img mx-auto d-block" alt="Ayam Bakar" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Ayam Bakar</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Chinese -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="studi_kasus/assets/image/sushi.png" class="card-img-top rounded-img mx-auto d-block" alt="Chinese Food" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Jepun Food</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Seafood -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="studi_kasus/assets/image/seafood.png" class="card-img-top rounded-img mx-auto d-block" alt="Seafood" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Seafood</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Dissert -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="studi_kasus/assets/image/dessert.png" class="card-img-top rounded-img mx-auto d-block" alt="Dissert" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Dissert</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Minuman -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="studi_kasus/assets/image/minuman.png" class="card-img-top rounded-img mx-auto d-block" alt="Minuman" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Minuman</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>

                        <!-- Menu Siap saji -->
                        <div class="col menu-item">
                                <div class="card border-0">
                                        <img src="studi_kasus/assets/image/siapsaji.png" class="card-img-top rounded-img mx-auto d-block" alt="Siap Saji" />
                                        <div class="card-body text-center">
                                                <h5 class="card-title">Siap Saji</h5>
                                                <a href="#" class="stretched-link"></a>
                                        </div>
                                </div>
                        </div>
                </div>

                <div>
                        <a href="studi_kasus/menu.php" class="btn btn-outline-danger position-absolute start-50 translate-middle mt-4 rounded-pill">Tampilkan kuliner lainnya</a>
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

                                                <?php echo "<img src='studi_kasus/assets/gambar/$data[foto]'class= 'card-img-top p-3 menu'/>"; ?>

                                                <div class="card-body">
                                                        <h5 class="card-title"><?= $data['namaBarang'] ?></h5>
                                                        <h6 class="card-title"><?= $data['harga'] ?></h6>
                                                        <p class="card-text"><?= $data['deskripsi'] ?></p>
                                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                                        <a class="btn btn-sm btn-info" href="studi_kasus/addCart.php?id=<?= $data['id'] ?>">
                                                                <i data-feather="shopping-cart"></i>
                                                        </a>
                                                        <a href="studi_kasus/pesanMenu.php?id=<?= $data['id'] ?>" class="btn btn-primary ml-1">Order</a>
                                                </div>
                                        </div>
                                </div>
                        <?php
                        endwhile;
                        ?>
                </div>
        </div>
        <a href="studi_kasus/menu.php" class="btn btn-outline-danger position-absolute start-50 translate-middle mt-4 rounded-pill">Tampilkan kuliner lainnya</a>
        </div>

        <!-- kenapa pesan disini? -->
        <div class="container text-center">
                <h1 class="text-center my-5">Kenapa pesan disini?</h1>
                <div class="row row-cols-1 row-cols-md-4">
                        <!-- pasti enak -->
                        <div class="col mb-4">
                                <div class="card" style="background-color: #9d32ad">
                                        <img src="studi_kasus/assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                                        <div class="card-body">
                                                <p class="card-text fs-4 fw-medium my-5 text-white">
                                                        Kualitas dan layanan yang terjamin.
                                                </p>
                                        </div>
                                </div>
                        </div>

                        <div class="col mb-4">
                                <div class="card" style="background-color: #0096b8">
                                        <img src="studi_kasus/assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                                        <div class="card-body">
                                                <p class="card-text fs-4 fw-medium my-5 text-white">
                                                        Kemudahan dalam pemesanan.
                                                </p>
                                        </div>
                                </div>
                        </div>

                        <div class="col mb-4">
                                <div class="card" style="background-color: #d14393">
                                        <img src="studi_kasus/assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                                        <div class="card-body">
                                                <p class="card-text fs-4 fw-medium my-5 text-white">
                                                        Keamanan dalam pengiriman.
                                                </p>
                                        </div>
                                </div>
                        </div>

                        <div class="col mb-4">
                                <div class="card" style="background-color: #d95700">
                                        <img src="studi_kasus/assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                                        <div class="card-body">
                                                <p class="card-text fs-4 fw-medium my-5 text-white">
                                                        Penawaran khusus dan diskon.
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <div class="container">
                <p class="text-left">Are you admin? Do you want to add a menu?<a href="inputProduct/index.php">add here</a></p>

        </div>

        <!-- End Content -->

        <?php
        require_once 'studi_kasus/layout/footer.php';
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>
                feather.replace();
        </script>
</body>

</html>