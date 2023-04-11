<?php
include('session.php');
//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {

    $nm_penyetor = $_POST['nm_penyetor'];
    $jumlah = $_POST['jumlah'];
    //Data akan di edit
    $edit = mysqli_query($koneksi, "INSERT INTO ta_saldo (id,nm_penyetor,jumlah,tanggal,time_stamp)
                                               VALUES ('$_POST[id]',  
                                                        '$_POST[nm_penyetor]', 
                                                        '$_POST[jumlah]', 
                                                        '$_POST[tanggal]', 
                                                        '$_POST[time_stamp]')

                                                    ");

    if ($edit) //jika edit sukses

    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Tambah Saldo','$username berhasil tambah saldo $jumlah','$time_stamp')");

        header("location:info-saldo?id=add-saldo-success&penyetor=$nm_penyetor&jumlah=$jumlah");
    } else {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Tambah Saldo','$username Gagal tambah saldo $jumlah','$time_stamp')");

        header("location:info-saldo?id=add-saldo-gagal&penyetor=$nm_penyetor&jumlah=$jumlah");
    }
}
