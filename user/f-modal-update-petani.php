<?php
include('session.php');

//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    //Data akan di edit
    $nm_suplayer = $_POST['nm_suplayer'];
    $edit = mysqli_query($koneksi, "UPDATE ta_transaksi set
                                                nm_suplayer = '$_POST[nm_suplayer]',
                                                hp = '$_POST[hp]',
                                                time_stamp = '$_POST[time_stamp]',
                                                tbg_masuk = '$_POST[tbg_masuk]',
                                                tbg_keluar = '$_POST[tbg_keluar]',
                                                tbg_kotor = '$_POST[tbg_kotor]',
                                                ptg_persen = '$_POST[ptg_persen]',
                                                ptg_persen2 = '$_POST[ptg_persen2]',
                                                ptg_kg = '$_POST[ptg_kg]',
                                                harga = '$_POST[harga]',
                                                ptg_hutang = '$_POST[ptg_hutang]',
                                                jumlah = '$_POST[jumlah]',
                                                tanggal = '$_POST[tanggal]'
                                             WHERE id = '$_POST[id]'
                                           ");
    if ($edit) //jika edit sukses
    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Update','$username berhasil update data Transaksi $nm_suplayer','$time_stamp')");
        header("location:transaksi-petani?id=update-transaksi-success&suplayer=$nm_suplayer");
    } else {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Update','$username Gagal update data Transaksi $nm_suplayer','$time_stamp')");
        header("location:transaksi-petani?id=update-transaksi-gagal&suplayer=$nm_suplayer");
    }
}
