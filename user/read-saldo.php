<?php
if (isset($_GET['hal'])) {
    //Pengujian jika edit Data
    if ($_GET['hal'] == "hapus") {
        //Persiapan hapus data
        $hapus = mysqli_query($koneksi, "DELETE FROM ta_saldo WHERE id = '$_GET[id]' ");
        if ($hapus) //jika simpan sukses
        {
            $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Hapus','$username Berhasil Menghapus Saldo','$time_stamp')");
            header("location:info-saldo?id=hapus-success");
        } else {
            header("location:info-saldo?id=hapus-gagal");
        }
    }
};
