<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$tahun = $_POST['tahun'];
$time_stamp = date('Y-m-d H:i:s');

$login = mysqli_query($koneksi, "select * from ta_user where username='$username' and password='$password' and status='on'");
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    // cek jika user login sebagai admin

    if ($data['level'] == "admin") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['tahun'] = $tahun;
        $_SESSION['level'] = "admin";
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','login','$username masuk ke aplikasi','$time_stamp')");
        // alihkan ke halaman dashboard admin
        header("location:admin/index?id=welcome");
        // cek jika user login sebagai Admin1

    } else if ($data['level'] == "user") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['tahun'] = $tahun;
        $_SESSION['level'] = "user";
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','login','$username masuk ke aplikasi','$time_stamp')");
        // alihkan ke halaman dashboard user

        header("location:user/index?id=welcome");
    } else {



        // alihkan ke halaman login kembali

        header("location:index.php?id=gagal-login");
    }
} else {

    header("location:index.php?id=gagal-login");
}

if (isset($_POST['g-recaptcha-response'])) {

    $recaptcha = $_POST['g-recaptcha-response'];



    if (!$recaptcha) {



        echo '<script>alert("Please check recaptcha")</script>';

        exit;
    } else {

        $secret = "6Lf0toYfAAAAACPXTWL-DMUYU0kNTP1G3BHsWYLI";
    }
}
