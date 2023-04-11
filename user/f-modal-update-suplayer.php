<?php
include('session.php');

//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    //Data akan di edit
    $nm_suplayer = $_POST['nm_suplayer'];
    $jenis = $_POST['jenis'];
    $edit = mysqli_query($koneksi, "UPDATE ta_suplayer set
                                                nm_suplayer = '$_POST[nm_suplayer]',
                                                hp = '$_POST[hp]',
                                                alamat = '$_POST[alamat]',
                                                panjar_tbs = '$_POST[panjar_tbs]'
                                             WHERE id = '$_POST[id]'
                                           ");
    if ($edit) //jika edit sukses
    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Update','$username berhasil update data suplayer $nm_suplayer','$time_stamp')");
        header("location:data-$jenis?id=update-suplayer-success&suplayer=$nm_suplayer");
    } else {
        header("location:data-$jenis?id=update-suplayer-gagal&suplayer=$nm_suplayer");
    }
}
