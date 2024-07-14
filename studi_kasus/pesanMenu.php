<?php
require_once 'connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM produk WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>makananku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- link css -->
    <link rel="stylesheet" href="assets/style.css" />
    <style>
        .container-content {
            margin-top: 80px; 
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">makananku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php" class="nav-link" id="floatingCart"> <i data-feather="shopping-cart"></i> Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

  <div class="page-container" style="padding-top: 20px;"> 
  <div class="container-content">
  <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-left mb-4">Checkout Order</h2> 
            <div class="card">
                <div class="card-body">
                    <!-- Form -->
                    <form action="storePesanan.php" method="POST">
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <table cellpadding="8" class="w-100">
                                <tr>
                                    <td>Kode Barang</td>
                                    <td><input class="form-control" type="text" name="id" size="20" type="hidden" required value="<?= $row['id'] ?>" readonly></td>
                                </tr>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td><input class="form-control" type="text" name="namaBarang" size="20" required value="<?= $row['namaBarang'] ?>" readonly></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td><input class="form-control" type="text" name="harga" size="20" required value="<?= $row['harga'] ?>" readonly></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td colspan="3"><textarea class="form-control" name="deskripsi" id="deskripsi" required readonly><?= $row['deskripsi'] ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Nama Pemesan</td>
                                    <td><input class="form-control" type="text" name="username" size="20" placeholder="nama pemesan harus sama dengan username pengguna" required></td>
                                </tr>
                                <tr>
                                    <td>quantity</td>
                                    <td><input class="form-control" type="text" name="quantity" size="20" placeholder="jumlah barang yang dipesan " required></td>
                                </tr>
                                <tr>
                                    <td>Note</td>
                                    <td colspan="3"><textarea class="form-control" name="note" id="note" required></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input class="btn btn-primary d-inline" type="submit" name="proses" value="Checkout">
                                        <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                                    </td>
                                </tr>
                            </table>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


    <!-- Footer -->
    <footer class="bg-danger text-white text-center p-3 mt-5">
        <p>&copy; 2024 makananku</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>


