<?php
include('session.php');
//jika tombol simpan diklik
if (isset($_POST['bhapus'])) {
    $query = mysqli_query($koneksi, "TRUNCATE TABLE log");
    if ($query) //jika edit sukses
    {
        header("location:index?id=clear-cache-success");
    } else {
        header("location:index?id=clear-cache-gagal");
    }
}
