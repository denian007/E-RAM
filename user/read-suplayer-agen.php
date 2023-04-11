<?php
if (isset($_GET['hal'])) {
    //Pengujian jika edit Data
    if ($_GET['hal'] == "hapus") {
        //Persiapan hapus data

        $hapus = mysqli_query($koneksi, "DELETE FROM ta_suplayer WHERE id = '$_GET[id]' ");
        if ($hapus) //jika simpan sukses
        {
            $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Hapus Suplayer','$username Berhasil Menghapus Suplayer $jenis dengan nama $nm_suplayer','$time_stamp')");
            header("location:data-agen?id=hapus-success");
        } else {
            header("location:data-agen?id=hapus-gagal");
        }
    }
};
