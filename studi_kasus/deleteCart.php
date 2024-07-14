<?php
session_start();
require_once 'connection.php';

$id = $_GET['id'];

$result = mysqli_query($connection, "DELETE FROM tcart WHERE id='$id'");

// Cek apakah query penghapusan berhasil
if ($result) {
    // Redirect ke halaman card=t.php
    header("Location: cart.php");
    exit();
} else {
    // Jika query gagal, tampilkan pesan kesalahan atau melakukan tindakan yang sesuai
    echo "Gagal menghapus data.";
}
?>
