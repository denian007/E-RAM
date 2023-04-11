<?php

// mengaktifkan session php

session_start();
date_default_timezone_set('Asia/Jakarta');
include('config.php');
$tahun = $_SESSION['tahun'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$time_stamp = date('Y-m-d H:i:s');
$insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','logout','$username Logout dari Aplikasi','$time_stamp')");


// menghapus semua session

session_destroy();



// mengalihkan halaman ke halaman login

header("location:index?id=logout");
