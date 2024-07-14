<?php
session_start();
require_once 'connection.php';

$namaBarang = $_POST['namaBarang'];
$harga= $_POST['harga'];
$foto= $_POST['foto'];
$quantity= $_POST['quantity'];
$deskripsi= $_POST['deskripsi'];

$query = mysqli_query($connection, "INSERT INTO tcart ( namaBarang,harga,foto,quantity,deskripsi) value('$namaBarang', '$harga', '$foto', '$quantity', '$deskripsi')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil membuat Pesanan '
  ];
  header("Location: cart.php");
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ./index.php');
                                            }