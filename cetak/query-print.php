<?php include('session.php');
$query = mysqli_query($koneksi, "select * from ta_transaksi where id='$_GET[x]'");
while ($data = mysqli_fetch_array($query)) :
    $nm_suplayer = $data['nm_suplayer'];
    $tanggal = tgl_indo($data['tanggal']);
    $tbg_masuk = rp($data['tbg_masuk']);
    $tbg_keluar = rp($data['tbg_keluar']);
    $tbg_kotor = rp($data['tbg_kotor']);
    $ptg_persen = rp($data['ptg_persen']);
    $ptg_persen2 = rp($data['ptg_persen2']);
    $ptg_kg = rp($data['ptg_kg']);
    $ptg_kg2 = rp($data['ptg_kg2']);
    $tbg_bersih = rp($data['tbg_bersih']);
    $harga = rp($data['harga']);
    $jumlah = $data['jumlah'];
    $cicilan_panjar_tbs = $data['ptg_hutang'];
    $jumlah_bayar = $jumlah - $cicilan_panjar_tbs;
    $catatan = $data['ket'];
?>
    <?php endwhile; ?>