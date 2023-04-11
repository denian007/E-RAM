<?php
date_default_timezone_set('Asia/Jakarta');
session_start();
include('../config.php');
include('../curency.php');
$tahun = $_SESSION['tahun'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$tgl_indo = tgl_indo(date('Y-m-d'));

?>
<?php
$query = mysqli_query($koneksi, "select * from ta_user where username='$username'");
while ($data = mysqli_fetch_array($query)) :
    $nm_user = $data['nama'];
?>
<?php endwhile; ?>

<?php
$query = mysqli_query($koneksi, "select sum(jumlah) as jumlah from ta_saldo");
while ($data = mysqli_fetch_array($query)) :
    $saldo_k = $data['jumlah'];
?>
<?php endwhile; ?>
<?php
$query = mysqli_query($koneksi, "select sum(jumlah) as jumlah,sum(ptg_hutang) as hutang,sum(tbg_bersih) as tbg_bersih from ta_transaksi");
while ($data = mysqli_fetch_array($query)) :
    $saldo_d = $data['jumlah'];
    $bayar_hutang = $data['hutang'];
    $tbg_bersih = $data['tbg_bersih'];
?>
<?php endwhile; ?>
<?php
$query = mysqli_query($koneksi, "select sum(jumlah_tbg) as jumlah_tbg  from ta_buah_keluar");
while ($data = mysqli_fetch_array($query)) :
    $jumlah_tbg_keluar = $data['jumlah_tbg'];
?>
<?php endwhile; ?>
<?php
$sum_saldo_k = $saldo_k + $bayar_hutang - $saldo_d;

?>
<?php
$query = mysqli_query($koneksi, "select count(id) as max_id  from ta_buah_keluar");
while ($data = mysqli_fetch_array($query)) :
    $max_id = $data['max_id'];
    $reg_baru = $max_id + 1;
?>
<?php endwhile; ?>


