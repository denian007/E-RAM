<?php

date_default_timezone_set('Asia/Jakarta');

include('config.php');

function rupiah($angka)
{
	$hasil_rupiah = "" . number_format($angka, 0, ",", ".");
	return $hasil_rupiah;
}
function rp($angka)
{
	$hasil_rupiah = "" . number_format($angka, 0, ".", ".");
	return $hasil_rupiah;
}
function rp2($angka)
{
	$hasil_rupiah = "" . number_format($angka, 0, ".", ",");
	return $hasil_rupiah;
}
// Tonase
function ton($angka)
{
	$hasil = "" . number_format($angka, 0, ".", ".") + 0 / (1) . " Ton";
	return $hasil;
}
//tanggal ID
function tgl_indo($tanggal)
{
	$bulan = array(

		1 =>   'Januari',

		'Februari',

		'Maret',

		'April',

		'Mei',

		'Juni',

		'Juli',

		'Agustus',

		'September',

		'Oktober',

		'November',

		'Desember'

	);

	$pecahkan = explode('-', $tanggal);



	// variabel pecahkan 0 = tanggal

	// variabel pecahkan 1 = bulan

	// variabel pecahkan 2 = tahun



	return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

function tgl_indo2($tanggal)

{

	$bulan = array(

		1 =>   'Januari',

		'Februari',

		'Maret',

		'April',

		'Mei',

		'Juni',

		'Juli',

		'Agustus',

		'September',

		'Oktober',

		'November',

		'Desember'

	);

	$pecahkan = explode('-', $tanggal);



	// variabel pecahkan 0 = tanggal

	// variabel pecahkan 1 = bulan

	// variabel pecahkan 2 = tahun



	return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

function tgl_indo3($tanggal)

{

	$bulan = array(

		1 =>   'Januari',

		'Februari',

		'Maret',

		'April',

		'Mei',

		'Juni',

		'Juli',

		'Agustus',

		'September',

		'Oktober',

		'November',

		'Desember'

	);

	$pecahkan = explode('-', $tanggal);



	// variabel pecahkan 0 = tanggal

	// variabel pecahkan 1 = bulan

	// variabel pecahkan 2 = tahun



	return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

//tanggal ID

function tgl_final($tanggal)

{

	$bulan = array(

		1 =>   'Januari',

		'Februari',

		'Maret',

		'April',

		'Mei',

		'Juni',

		'Juli',

		'Agustus',

		'September',

		'Oktober',

		'November',

		'Desember'

	);

	$pecahkan = explode('/', $tanggal);



	// variabel pecahkan 0 = tanggal

	// variabel pecahkan 1 = bulan

	// variabel pecahkan 2 = tahun



	return $pecahkan[0] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[2];
}

// original string

$str = "GeeksForGeeks";



// string converted to upper case

$resStr = strtoupper($str);



function penyebut($nilai)

{

	$nilai = abs($nilai);

	$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");

	$temp = "";

	if ($nilai < 12) {

		$temp = " " . $huruf[$nilai];
	} else if ($nilai < 20) {

		$temp = penyebut($nilai - 10) . " Belas";
	} else if ($nilai < 100) {

		$temp = penyebut($nilai / 10) . " Puluh" . penyebut($nilai % 10);
	} else if ($nilai < 200) {

		$temp = " Seratus" . penyebut($nilai - 100);
	} else if ($nilai < 1000) {

		$temp = penyebut($nilai / 100) . " Ratus" . penyebut($nilai % 100);
	} else if ($nilai < 2000) {

		$temp = " Seribu" . penyebut($nilai - 1000);
	} else if ($nilai < 1000000) {

		$temp = penyebut($nilai / 1000) . " Ribu" . penyebut($nilai % 1000);
	} else if ($nilai < 1000000000) {

		$temp = penyebut($nilai / 1000000) . " Juta" . penyebut($nilai % 1000000);
	} else if ($nilai < 1000000000000) {

		$temp = penyebut($nilai / 1000000000) . " Milyar" . penyebut(fmod($nilai, 1000000000));
	} else if ($nilai < 1000000000000000) {

		$temp = penyebut($nilai / 1000000000000) . " Trilyun" . penyebut(fmod($nilai, 1000000000000));
	}

	return $temp;
}



function terbilang($nilai)

{

	if ($nilai < 0) {

		$hasil = "minus " . trim(penyebut($nilai));
	} else {

		$hasil = trim(penyebut($nilai));
	}

	return $hasil;
}



function tglIndonesia($indo_tgl)

{

	$tr   = trim($indo_tgl);

	$indo_tgl    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);

	return $indo_tgl;
}
