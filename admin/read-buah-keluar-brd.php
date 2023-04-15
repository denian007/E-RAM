<?php
if (isset($_GET['hal'])) {
    //Pengujian jika edit Data
    if ($_GET['hal'] == "hapus") {
        //Persiapan hapus data
        $hapus = mysqli_query($koneksi, "DELETE FROM ta_buah_keluar WHERE id = '$_GET[id]' ");
        if ($hapus) //jika simpan sukses
        {
            $nm_suplayer = $data['nm_suplayer'];
            $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Hapus','$username Berhasil Menghapus Transaksi $nm_suplayer','$time_stamp')");
            header("location:transaksi-keluar-brd?id=hapus-success");
        } else {
            header("location:transaksi-keluar-brd?id=hapus-gagal");
        }
    }
};
