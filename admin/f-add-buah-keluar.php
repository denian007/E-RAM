<?php
include('session.php');
//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    $komoditas = $_POST['jenis2'];
    $edit = mysqli_query($koneksi, "INSERT INTO ta_buah_keluar (id,register,time_stamp,pabrik_tujuan,pabrik_tujuan2,alamat_pabrik,tbg_kosong,tbg_mobil_buah,tbg_buah,berat_buah,rata_rata_buah,nm_sopir,plat,nm_pengirim,hp,tanggal,jenis2,uang_jalan)
                                               VALUES ('$_POST[id]',  
                                                        '$_POST[register]',
                                                        '$_POST[time_stamp]',
                                                        '$_POST[pabrik_tujuan]',
                                                        '$_POST[pabrik_tujuan2]',
                                                        '$_POST[pabrik_tujuan3]',
                                                        '$_POST[mobil_kosong]',
                                                        '$_POST[mobil_buah]',
                                                        '$_POST[bb_buah]',
                                                        '$_POST[tbs_rata]',
                                                        '$_POST[total_tbs]',
                                                        '$_POST[nm_sopir]',
                                                        '$_POST[nm_mobil]',
                                                        '$_POST[nm_pengirim]',
                                                        '$_POST[hp]',
                                                        '$_POST[tanggal]',
                                                        '$_POST[jenis2]',
                                                        '$_POST[uang_jalan]')

                                                    ");

    if ($edit) //jika edit sukses

    {
        header("location:transaksi-keluar-$komoditas?id=add-transaksi-success");
    } else {
        header("location:transaksi-keluar-$komoditas?id=add-transaksi-gagal");
    }
}
