<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>admin Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- link css -->
  <link rel="stylesheet" href="style.css" />
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
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="floatingCart"> <i data-feather="shopping-cart"></i> Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="page-container" style="margin-top: 80px;">
    <div class="container-content">
      <div class="row justify-content-center">
        <div class="col-8">
          <h2 class="text-left mb-4">Tambah Menu</h2>
          <div class="card">
            <div class="card-body">
              <!-- // Form -->
              <form action="store.php" method="POST" enctype="multipart/form-data">
                <table cellpadding="11" class="w-100">
                  <tr>
                    <td>Nama Produk</td>
                    <td><input class="form-control" type="text" name="namaBarang" id="namaBarang" size="20" required></td>
                  </tr>

                  <tr>
                    <td>Harga</td>
                    <td><input class="form-control" type="text" name="harga" id="harga" size="20" required></td>
                  </tr>

                  <tr>
                    <td>Deskripsi Produk</td>
                    <td colspan="3"><textarea class="form-control" name="deskripsi" id="deskripsi" required></textarea></td>
                  </tr>

                  <tr>
                    <td>Foto Produk</td>
                    <td><input class="form-control" type="file" enctype="multipart/form-data" name="foto" size="20" required></td>
                  </tr>

                  <tr>
                    <td>
                      <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                      <a href="../index.php" class="btn btn-danger ml-1">Kembali</a>
                    </td>
                  </tr>

                </table>
              </form>
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