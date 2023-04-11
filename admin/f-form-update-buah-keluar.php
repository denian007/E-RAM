<?php
include('session.php');

//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    //Data akan di edit
    $edit = mysqli_query($koneksi, "UPDATE ta_buah_keluar set
                                                id = '$_POST[id]',
                                                register = '$_POST[register]',
                                                time_stamp = '$_POST[time_stamp]',
                                                pabrik_tujuan = '$_POST[pabrik_tujuan]',
                                                pabrik_tujuan2 = '$_POST[pabrik_tujuan2]',
                                                alamat_pabrik = '$_POST[alamat_pabrik]',
                                                tbg_kosong = '$_POST[mobil_kosong]',
                                                tbg_mobil_buah = '$_POST[mobil_buah]',
                                                tbg_buah = '$_POST[bb_buah]',
                                                berat_buah = '$_POST[tbs_rata]',
                                                rata_rata_buah = '$_POST[total_tbs]',
                                                nm_sopir = '$_POST[nm_sopir]',
                                                plat = '$_POST[nm_mobil]',
                                                nm_pengirim = '$_POST[nm_pengirim]',
                                                hp = '$_POST[hp]',
                                                tanggal = '$_POST[tanggal]',
                                                jenis2 = '$_POST[jenis2]',
                                                uang_jalan = '$_POST[uang_jalan]',
                                                netto_pabrik = '$_POST[netto_pabrik]',
                                                untung_kg = '$_POST[untung_kg]'
                                             WHERE id = '$_POST[id]'
                                           ");
    if ($edit) //jika edit sukses
    {
        $insert_log = mysqli_query($koneksi, "INSERT INTO log(username,hal,pesan,time_stamp) VALUES('$username','Update','$username berhasil update data buah keluar','$time_stamp')");
        header("location:transaksi-keluar-tbs?id=update-success");
    } else {
        header("location:transaksi-keluar-tbs?id=update-gagal");
    }
}
