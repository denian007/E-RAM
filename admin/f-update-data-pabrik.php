<?php
include('session.php');

//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    //Data akan di edit
    $edit = mysqli_query($koneksi, "UPDATE daftar_pabrik set
                                                id = '$_POST[id]',
                                                nm_pabrik_singkat = '$_POST[nm_pabrik_singkat]',
                                                nm_full_pabrik = '$_POST[nm_full_pabrik]',
                                                alamat_pabrik = '$_POST[alamat_pabrik]',
                                                manager_pabrik = '$_POST[nm_manager_pabrik]',
                                                uang_jalan = '$_POST[uang_jalan]'
                                             WHERE id = '$_POST[id]'
                                           ");
    if ($edit) //jika edit sukses
    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Update','$username berhasil update data pabrik','$time_stamp')");
        header("location:daftar-pabrik?id=update-success");
    } else {
        header("location:daftar-pabrik?id=update-success");
    }
}
