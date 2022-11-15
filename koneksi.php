<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "tiketpesawat";
//koneksi database
$conn = mysqli_connect($server, $user, $password, $database);
//if (!$conn) {
   // die("Koneksi Gagal!!" .mysqli_connect_error());
//}
//echo ("Koneksi Berhasil!!");
//mysqli_close($conn);