<?php
include('session.php');

//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    //Data akan di edit
    $edit = mysqli_query($koneksi, "UPDATE ta_ramp set
                                                nm_ram = '$_POST[nm_ram]',
                                                alamat = '$_POST[alamat]',
                                                harga_agen = '$_POST[harga_agen]',
                                                harga_petani = '$_POST[harga_petani]',
                                                persen_agen = '$_POST[persen_agen]',
                                                persen_petani = '$_POST[persen_petani]',
                                                harga_brd_agen = '$_POST[harga_brd_agen]',
                                                harga_brd_petani = '$_POST[harga_brd_petani]',
                                                persen_brd_agen = '$_POST[persen_brd_agen]',
                                                persen_brd_petani = '$_POST[persen_brd_petani]',
                                                kontak = '$_POST[kontak]'
                                             WHERE id = '1'
                                           ");
    if ($edit) //jika edit sukses
    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Pengaturan','$username berhasil update pengaturan RAMP','$time_stamp')");
        header("location:index?id=update-success");
    } else {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Pengaturan','$username Gagal update pengaturan RAMP','$time_stamp')");
        header("location:index?id=update-gagal");
    }
}
