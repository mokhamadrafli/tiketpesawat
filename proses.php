<?php
include('koneksi.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $query = "SELECT * FROM tbluser WHERE username='$username' AND password='$password'";
    $queryDB = mysqli_query($conn, $query);
    $check = mysqli_num_rows($queryDB);
    if ($check > 0) {
        $getData = mysqli_fetch_array($queryDB);
        $_SESSION['username'] = $getData;
        $_SESSION['is_login'] = true;

        header("location: welcome.php");
    } else {
        echo "Username dan Password yang anda masukan salah";
    }
} else {
    return "anda tidak di ijinkan";
}