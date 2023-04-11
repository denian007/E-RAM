<?php
date_default_timezone_set('Asia/Jakarta');
$nm_app = "E-RAMP";
$versi = "1.0.0";
$kd_reg = "REG";
$base_url = "http://localhost:88/sardam3";
$url_active = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$time_stamp = date('Y-m-d H:i:s');


// Config Database
$server = "localhost";
$user     = "root";
$pass     = "";
$db     = "e_ram2";

$koneksi = mysqli_connect("$server", "$user", "$pass", "$db");

if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
<?php
$sql = mysqli_query($koneksi, "select * from ta_ramp where id='1'");
while ($data = mysqli_fetch_array($sql)) :
    $nm_ramp = $data['nm_ram'];
    $kontak = $data['kontak'];
    $alamat = $data['alamat'];
    $harga_agen_tbs = $data['harga_agen'];
    $harga_petani_tbs = $data['harga_petani'];
    $persen_agen_tbs = $data['persen_agen'];
    $persen_petani_tbs = $data['persen_petani'];

    // BRD
    $harga_agen_brd = $data['harga_brd_agen'];
    $harga_petani_brd = $data['harga_brd_petani'];
    $persen_agen_brd = $data['persen_brd_agen'];
    $persen_petani_brd = $data['persen_brd_petani'];
?>
<?php endwhile; ?>
