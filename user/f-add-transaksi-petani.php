<?php
include('session.php');
//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {

    $nm_suplayer = $_POST['nm_suplayer'];
    $time_stamp = $_POST['time_stamp'];
    $komoditas = $_POST['jenis2'];

    $edit = mysqli_query($koneksi, "INSERT INTO ta_transaksi (nm_suplayer,hp,tbg_masuk,tbg_keluar,tbg_kotor,ptg_persen,ptg_persen2,ptg_kg,tbg_bersih,harga,ptg_hutang,jumlah,ket,jenis,time_stamp,tanggal,jenis2)
                                               VALUES ('$_POST[nm_suplayer]', 
                                                        '$_POST[hp]', 
                                                        '$_POST[tbg_masuk]', 
                                                        '$_POST[tbg_keluar]',
                                                        '$_POST[tbg_kotor]',
                                                        '$_POST[ptg_persen]',
                                                        '$_POST[ptg_persen2]',
                                                        '$_POST[ptg_kg]',
                                                        '$_POST[tbg_bersih]',
                                                        '$_POST[harga]',
                                                        '$_POST[ptg_hutang]',
                                                        '$_POST[jumlah]',
                                                        '$_POST[ket]',
                                                        '$_POST[jenis]',
                                                        '$_POST[time_stamp]',
                                                        '$_POST[tanggal]',
                                                        '$_POST[jenis2]')

                                                    ");

    if ($edit) //jika edit sukses

    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Tambah Transaksi','$username Berhasil tambah transaksi','$time_stamp')");
        header("location:transaksi-petani-$komoditas?id=add-transaksi-success&suplayer=$nm_suplayer");
    } else {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Tambah Transaksi','$username Gagal tambah transaksi','$time_stamp')");

        header("location:transaksi-petani-$komoditas?id=add-transaksi-gagal&suplayer=$nm_suplayer");
    }
}
