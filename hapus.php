<?php
include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database 
        $id =$_GET['id']; //menampung id//query hapus
        $datas = mysqli_query($conn, "delete from barang where id ='$id'") or die(mysqli_error($conn));
        //alert dan redirect ke index.php
echo "<sript>alert('data berhasil dihapus.');window.location='index.php';</script>";