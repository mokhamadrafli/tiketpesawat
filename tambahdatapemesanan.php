<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //menampung data dari inputan
    $nama = $_POST['namaI'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $tempdir="../images/";
    if(!file_exist($tempdir))
    mkdir($tempdir,0755);
    $temp_path= $tempdir.basename($_FILES['file']['name']);
    $file = $_FILES['file']['name'];
    $x = explode('.',$file);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran <1044070) {
            move_uploaded_file($file_tmp, $temp_path);
            $query = mysqli_query($conn, "insert into pemesan (Nama,email,Alamat, telepon,foto)values('$nama', '$email', '$alamat', '$telepon', '$file')")or die(mysqli_error($conn));
            if ($query) {
                //echo 'FILE BERHASIL DI UPLOAD';
                echo "<script>alert('data berhasil disimpan.');window.location='../dashboard.php;</script>";
            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        }else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}

    
            