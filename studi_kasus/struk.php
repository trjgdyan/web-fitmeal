<?php
require_once 'connection.php';
require_once 'layout/header.php';

$nama = $_GET['username'];

$connection = mysqli_connect("localhost", "root", "", "studycase");
$query = "select * from tpesanan where username='$nama'";
$result = mysqli_query($connection, $query);

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (!$result) {
    die("Query error: " . ($connection));
}

$data = mysqli_fetch_assoc($result);

$total_harga = $data["quantity"] * $data["harga"];

?>
<style>
    @media print {
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            max-width: 500px;
            margin: auto;
        }
    }

    .print-btn-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .print-btn-container .btn {
        margin-bottom: 10px;
    }
</style>

<section class="container">
    <div class="container-header d-flex justify-content-between">
        <h1>Detail Pesanan</h1>
    </div>
    <div class="container-content">
        <div class="card mt-4" style="width: 69rem;">
            <div class="card-header">
                <h4>Struk Pesanan</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <td class="col-2">Nama Barang</td>
                                <td>:</td>
                                <td><?= $data["namaBarang"] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Pembeli</td>
                                <td>:</td>
                                <td><?= $data["username"] ?></td>
                            </tr>
                            <tr>
                                <td>Note</td>
                                <td>:</td>
                                <td><?= $data["note"] ?></td>
                            </tr>
                            <tr>
                                <td>quantity</td>
                                <td>:</td>
                                <td><?= $data["quantity"] ?></td>
                            </tr>
                            <tr>
                                <td>harga</td>
                                <td>:</td>
                                <td><?= $data["harga"] ?></td>
                            </tr>
                            <tr>
                                <td>tanggal</td>
                                <td>:</td>
                                <td><?= $data["tanggal"] ?></td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td>:</td>
                                <td><?= $total_harga ?></td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            </ul>
        </div>
        <div class="print-btn-container">
            <button type="button" class="btn btn-primary" onclick="window.print()">Cetak</button>
            <a href="./index.php" class="btn btn-danger ml-1">Kembali</a>
        </div>
        <p class="fw-bold">!!! Silahkan cetak struk pesanan </p>
    </div>
</section>
<?php
require_once 'layout/footer.php'
?>
