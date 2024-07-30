<?php
$Servername = "mariadb";
$Username = "root";
$Password = "123456";

$connect = mysqli_connect($Servername, $Username, $Password);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
