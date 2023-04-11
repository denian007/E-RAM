<!DOCTYPE html>
<?php include('session.php'); ?>
<html lang="id">

<head>
    <?php include('../meta.php'); ?>
    <title>Cetak</title>
    <link rel="shortcut icon" href="<?= $base_url ?>/logo.png">
    <script src="<?= $base_url ?>/assets/jquery-3.6.1.min.js"></script>
    <!-- Plugins css -->
    <link href="<?= $base_url ?>/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="<?= $base_url ?>/plugins/bootstrap-md-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

    <link href="<?= $base_url ?>/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $base_url ?>/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <link href="<?= $base_url ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $base_url ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= $base_url ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- SweetAlert -->
    <link href="<?= $base_url; ?>/assets/sweetalert2/animate.min.css" rel="stylesheet">
    <script src="<?= $base_url; ?>/assets/sweetalert2/sweetalert2.min.js"></script>
    <link href="<?= $base_url; ?>/assets/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= $base_url; ?>/assets/toastr/toastr.css">
    <script src="<?= $base_url; ?>/assets/toastr/toastr.min.js"></script>
    <link rel="stylesheet" href="<?= $base_url; ?>/assets/toastr/toastr.min.css">
    <script>
        window.print();
    </script>
</head>

<body class="bg-white">
    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card mt-5" style="border: 1px solid black;box-shadow:5px 5px 5px;">
                    <div class="card-box p-3">
                        <center>
                            <h5><?= $nm_ramp; ?> <br> Alamat : <?= $alamat; ?></h5>
                        </center>
                        <hr>
                        <br>
                        <center>
                            <?php
                            $sql = mysqli_query($koneksi, "select left(time_stamp,10) as tanggal from ta_transaksi where id='$_GET[x]'");
                            while ($data = mysqli_fetch_array($sql)) :
                                $tanggal = $data['tanggal']; ?>
                            <?php endwhile; ?>
                            <?php
                            $query = mysqli_query($koneksi, "select * from ta_transaksi where id='$_GET[x]'");
                            while ($data = mysqli_fetch_array($query)) :
                            ?>
                                <table class="table table-bordered table-striped table-hover" style="font-weight: bold;font-size:20px;width:80%;">
                                    <tbody>
                                        <tr>
                                            <td width="200">Nama Suplayer</td>
                                            <td><?= $data['nm_suplayer']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td><?= tgl_indo($tanggal); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kontak</td>
                                            <td><?= $data['hp']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bruto</td>
                                            <td><?= rp($data['tbg_masuk']); ?> Kg</td>
                                        </tr>
                                        <tr>
                                            <td>Tara</td>
                                            <td><?= rp($data['tbg_keluar']); ?> Kg</td>
                                        </tr>
                                        <tr>
                                            <td>Potongan</td>
                                            <td><?= $data['ptg_persen']; ?>% Sampah + <?= $data['ptg_persen2']; ?>% Air = <?= $data['ptg_persen'] + $data['ptg_persen2']; ?>% / <?= rp($data['ptg_kg']); ?> Kg</td>
                                        </tr>
                                        <tr>
                                            <td>Netto</td>
                                            <td><?= rp($data['tbg_bersih']); ?> Kg</td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>Rp. <?= rp($data['harga']); ?>,-</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td>Rp. <?= rp($data['jumlah']); ?>,-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php endwhile; ?>
                        </center>
                        <br>
                        <hr>
                        <center>
                            <span>Copyright © <?= $nm_app; ?> <?= $tahun; ?></span>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>