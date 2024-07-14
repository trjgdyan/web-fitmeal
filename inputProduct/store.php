<?php
include('connection.php');

$namaBarang = $_POST['namaBarang'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['name'];

if ($foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $foto);
    $ektensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto;

    if (in_array($ektensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../studi_kasus/assets/gambar/' . $nama_gambar_baru);

        $query = "INSERT INTO produk (namaBarang,harga,deskripsi,foto) VALUE ('$namaBarang','$harga','$deskripsi','$nama_gambar_baru')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query Error : " . mysqli_error($connection) . "-" . mysqli_error($connection));
        } else {
            echo "<script>alert('data berhasil ditambahkan') ;window.location.href = 'index.php' ;</script>";
        }
    } else {
        echo "<script>alern('ekstensi gambar hanya bisa jpg dan png') ;window.location.href = 'index.php' } else { window.location.href = 'index.php' }</script>";
    }
} else {
    $query = "INSERT INTO produk (namaBarang,harga,deskripsi) VALUE ('$namaBarang','$harga','$deskripsi')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Error : " . mysqli_error($connection) . "-" . mysqli_error($connection));
    } else {
        echo "<script>alern('data berhasil ditambahkan') ;window.location.href = 'index.php' ;</script>";
    }
}
