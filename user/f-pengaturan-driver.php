<?php
include('session.php');

//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    //Data akan di edit
    $edit = mysqli_query($koneksi, "UPDATE ta_driver set
                                                nm_driver = '$_POST[nm_driver]',
                                                hp = '$_POST[hp]',
                                                alamat = '$_POST[alamat]',
                                                nm_mobil = '$_POST[nm_mobil]',
                                                plat = '$_POST[plat]'
                                             WHERE id = '$_POST[id]'
                                           ");
    if ($edit) //jika edit sukses
    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Update','$username berhasil update data driver','$time_stamp')");
        header("location:index?id=update-success");
    } else {
        header("location:index?id=update-gagal");
    }
}
