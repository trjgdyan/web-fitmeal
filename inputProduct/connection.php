<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "studycase";

$connection = mysqli_connect($dbhost, $dbusername, $dbpassword,  $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>