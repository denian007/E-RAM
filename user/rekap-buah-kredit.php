<?php
include('session.php');
include('read-buah-keluar.php');
//echo print_r($_SESSION);
if ($_SESSION['level'] == "") {
    header("location:../index?id=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../meta.php'); ?>
    <title>Rekap Buah Kredit</title>
    <link rel="shortcut icon" href="<?= $base_url ?>/logo.png">
    <script src="<?= $base_url ?>/assets/jquery-3.6.1.min.js"></script>

    <!-- DataTables -->
    <link href="<?= $base_url ?>/plugins//datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $base_url ?>/plugins//datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?= $base_url ?>/plugins//datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
</head>

<body>
    <?php include('../notif.php'); ?>
    <?php include('pengaturan-user.php'); ?>
    <!-- Navigation Bar-->
    <header id="topnav">
        <?php include('topbar.php'); ?>
        <!-- end topbar-main -->

        <!-- MENU Start -->
        <?php include('sidebar.php'); ?>
        <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->

    <!-- page wrapper start -->
    <div class="wrapper">
        <div class="page-title-box">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div class="info"><?= $tgl_indo; ?></div>
                            </div>
                        </div>

                        <h4 class="page-title">Rekap Buah Kredit</h4>

                    </div>
                </div>
            </div>
            <!-- end container-fluid -->

        </div>
        <!-- page-title-box -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title"></h4>
                                <p class="text-muted m-b-30">
                                </p>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-success btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-filter"></i> Filter Bulanan
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-01">Januari <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-02">Februari <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-03">Maret <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-04">April <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-05">Mei <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-06">Juni <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-07">Juli <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-08">Agustus <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-09">September <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-10">Oktober <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-11">November <?= date('Y'); ?></a>
                                                <a class="dropdown-item" target="_blank" href="filter-rekap-buah-kredit.php?bulan=<?= date('Y'); ?>-12">Desember <?= date('Y'); ?></a>
                                            </div>
                                        </div>
                                        <a target="_blank" href="filter-rekap-buah-kredit-all.php" class="btn btn-outline-warning btn-block"><i class="fa fa-print"></i> Cetak Semua</a>
                                    </div>
                                </div>
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr class="text-center bg-primary text-white">
                                            <th width="5">No</th>
                                            <th width="500">Nama Suplayer</th>
                                            <th width="100">Pemasok</th>
                                            <th width="100">Broto</th>
                                            <th width="100">Tara</th>
                                            <th width="100">Netto</th>
                                            <th width="100">Tanggal</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "select * from ta_transaksi where time_stamp like '%$tahun%'");
                                        while ($data = mysqli_fetch_array($query)) :
                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td><?= $data['nm_suplayer']; ?></td>
                                                <td class="text-center"><?= $data['jenis']; ?></td>
                                                <td class="text-center"><?= rp($data['tbg_masuk']); ?> Kg</td>
                                                <td class="text-center"><?= rp($data['tbg_keluar']); ?> Kg</td>
                                                <td class="text-center"><?= rp($data['tbg_bersih']); ?> Kg</td>
                                                <td class="text-center"><?= tgl_indo($data['tanggal']); ?></td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end page content-->

    </div>
    <!-- page wrapper end -->

    <!-- Footer -->
    <?php include('footer.php'); ?>
    <!-- End Footer -->


    <!-- jQuery  -->
    <script src="<?= $base_url ?>/assets/js/jquery.min.js"></script>
    <script src="<?= $base_url ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>/assets/js/jquery.slimscroll.js"></script>
    <script src="<?= $base_url ?>/assets/js/waves.min.js"></script>

    <script src="<?= $base_url ?>/plugins//jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Required datatable js -->
    <script src="<?= $base_url ?>/plugins//datatables/jquery.dataTables.min.js"></script>
    <script src="<?= $base_url ?>/plugins//datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="<?= $base_url ?>/plugins//datatables/dataTables.buttons.min.js"></script>
    <script src="<?= $base_url ?>/plugins//datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= $base_url ?>/plugins//datatables/jszip.min.js"></script>
    <script src="<?= $base_url ?>/plugins//datatables/pdfmake.min.js"></script>
    <script src="<?= $base_url ?>/plugins//datatables/vfs_fonts.js"></script>
    <script src="<?= $base_url ?>/plugins//datatables/buttons.html5.min.js"></script>
    <script src="<?= $base_url ?>/plugins//datatables/buttons.print.min.js"></script>
    <script src="<?= $base_url ?>/plugins//datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="<?= $base_url ?>/plugins//datatables/dataTables.responsive.min.js"></script>
    <script src="<?= $base_url ?>/plugins//datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="<?= $base_url ?>/assets/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="<?= $base_url ?>/assets/js/app.js"></script>


</body>

</html>