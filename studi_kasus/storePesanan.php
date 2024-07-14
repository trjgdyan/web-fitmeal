<?php
session_start();
require_once 'connection.php';

$namaBarang = $_POST['namaBarang'];
$username = $_POST['username'];
$harga= $_POST['harga'];
$note= $_POST['note'];
$quantity= $_POST['quantity'];

$query = mysqli_query($connection, "INSERT INTO tpesanan ( namaBarang,username,harga,note,quantity) value('$namaBarang', '$username', '$harga', '$note', '$quantity')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil membuat Pesanan '
  ];
  header("Location: struk.php?username=$username");
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ./index.php');
                                            }