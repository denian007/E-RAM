<?php
include('session.php');
include('read-saldo.php');
//echo print_r($_SESSION);
if ($_SESSION['level'] == "") {
    header("location:../index?id=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../meta.php'); ?>
    <title>Filter Rekap Buah Keluar Bulan <?= $_GET['bulan'] ?></title>
    <link rel="shortcut icon" href="<?= $base_url ?>/logo.png">
    <script src="<?= $base_url ?>/assets/jquery-3.6.1.min.js"></script>
    <link href="<?= $base_url ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $base_url ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <script>
        window.print();
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="card mt-5">
            <div class="card-box ">
                <style>
                    table,
                    th,
                    td {
                        border: 1px solid black;
                        border-collapse: collapse;
                    }
                </style>
                <table style="color:#000;width:100%;">
                    <thead>
                        <tr class="text-center" style="background-color:#35a989;height:30px;">
                            <th style="background-color:#35a989;" width="5">No</th>
                            <th style="background-color:#35a989;" width="500">Nama Suplayer</th>
                            <th style="background-color:#35a989;" width="100">Suplayer</th>
                            <th style="background-color:#35a989;" width="100">Netto</th>
                            <th style="background-color:#35a989;" width="150">Tanggal</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi, "select * from ta_transaksi");
                        while ($data = mysqli_fetch_array($query)) :
                        ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $data['nm_suplayer']; ?></td>
                                <td class="text-center"><?= $data['jenis']; ?></td>
                                <td class="text-center"><?= rp($data['tbg_bersih']); ?> Kg</td>
                                <td class="text-center"><?= tgl_indo($data['tanggal']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi, "select sum(tbg_masuk) as tbg_masuk,sum(tbg_keluar) as tbg_keluar,sum(tbg_bersih) as tbg_bersih from ta_transaksi");
                        while ($data = mysqli_fetch_array($query)) :
                        ?>
                            <tr>
                                <td style="background-color:#35a989;text-align:end;" colspan="2"><b>Jumlah</b></td>
                                <td style="background-color:#35a989;" class="text-center">-</td>
                                <td style="background-color:#35a989;" class="text-center"><b><?= rp($data['tbg_bersih']); ?> Kg</b></td>
                                <td style="background-color:#35a989;"></td>
                            </tr>
                        <?php endwhile; ?>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="<?= $base_url ?>/assets/js/jquery.min.js"></script>
    <script src="<?= $base_url ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>/assets/js/jquery.slimscroll.js"></script>
    <script src="<?= $base_url ?>/assets/js/waves.min.js"></script>
</body>

</html>