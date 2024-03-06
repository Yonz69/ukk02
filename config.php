<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "ukk02";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi){
     echo "koneksi Gagal";
}
