<?php
include('session.php');
//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    $nm_penyetor = $_POST['nm_penyetor'];
    $jumlah = $_POST['jumlah'];
    //Data akan di edit
    $edit = mysqli_query($koneksi, "INSERT INTO ta_saldo (id,nm_suplayer,tbg_masuk,tbg_keluar,tbg_bersih,ptg_persen,ptg_persen2,ptg_kg,harga,jumlah)
                                               VALUES ('$_POST[id]',  
                                                        '$_POST[nm_suplayer]', 
                                                        '$_POST[tbg_masuk]', 
                                                        '$_POST[tbg_keluar]', 
                                                        '$_POST[tbg_bersih]',
                                                        '$_POST[tbg_bersih]',
                                                        '$_POST[tbg_bersih]',
                                                        '$_POST[tbg_bersih]',
                                                        '$_POST[tbg_bersih]',
                                                        '$_POST[tbg_bersih]')

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
