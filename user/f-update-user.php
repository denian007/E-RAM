<?php
include('session.php');

//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    //Data akan di edit
    $edit = mysqli_query($koneksi, "UPDATE ta_user set
                                                id = '$_POST[id]',
                                                nama = '$_POST[nama]',
                                                username = '$_POST[username]',
                                                password = '$_POST[password]'
                                             WHERE id = '$_POST[id]'
                                           ");
    if ($edit) //jika edit sukses
    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Update','$username berhasil update data user','$time_stamp')");
        header("location:index?id=update-user-berhasil");
    } else {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Update','$username Gagal update data user','$time_stamp')");
        header("location:index?id=update-user-berhasil");
    }
}
