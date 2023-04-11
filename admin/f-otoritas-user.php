<?php
include('session.php');

//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    //Data akan di edit
    $edit = mysqli_query($koneksi, "UPDATE ta_user set
                                                nm_otoritas = '$_POST[nm_otoritas]',
                                                otoritas1 = '$_POST[otoritas1]',
                                                otoritas2 = '$_POST[otoritas2]',
                                                status = '$_POST[status]'
                                             WHERE id = '$_POST[id]'
                                           ");
    if ($edit) //jika edit sukses
    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Update','$username berhasil update otoritas user','$time_stamp')");
        header("location:otoritas-user?id=update-success");
    } else {
        header("location:otoritas-user?id=update-gagal");
    }
}
