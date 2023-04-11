<?php
include('session.php');
//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    $jenis = $_POST['jenis'];
    $nm_suplayer = $_POST['nm_suplayer'];
    $sql = mysqli_query($koneksi, "select * from ta_suplayer where nm_suplayer='$nm_suplayer'");
    $cek = mysqli_num_rows($sql);

    if ($cek == 0) {
        $simpan = mysqli_query($koneksi, "INSERT INTO ta_suplayer (nm_suplayer,hp,alamat,panjar_tbs,jenis)
                                               VALUES ('$_POST[nm_suplayer]',  
                                                        '$_POST[hp]',
                                                        '$_POST[alamat]',
                                                        '$_POST[panjar_tbs]',
                                                        '$_POST[jenis]')
                                                    ");
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Tambah $jenis','$username Berhasil tambah Suplayer $jenis dengan nama  $nm_suplayer','$time_stamp')");
        header("location:data-$jenis?id=add-$jenis-success");
    } else {
        header("location:tambah-suplayer?jenis=$jenis&id=suplayer-ready&nama=$nm_suplayer");
    }
}
