<?php
include('session.php');
//echo print_r($_SESSION);
if ($_SESSION['level'] == "") {
    header("location:../index?id=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../meta.php'); ?>
    <title><?= $nm_app; ?></title>
    <link rel="shortcut icon" href="<?= $base_url ?>/assets/images/favicon.ico">
    <script src="<?= $base_url ?>/assets/jquery-3.6.1.min.js"></script>

    <link rel="stylesheet" href="<?= $base_url ?>/plugins/morris/morris.css">
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

                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->

        </div>
        <!-- page-title-box -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Kredit</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">Saldo (Rp.)</h6>
                                        <h5 class="mb-3 mt-0">Rp. <?= rp($sum_saldo_k); ?>,-</h5>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline display-2 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Debet</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">Saldo (Rp.)</h6>
                                        <h5 class="mb-3 mt-0">Rp. <?= rp($saldo_d); ?>,-</h5>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-buffer display-2 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Kredit</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">TBS RAMP</h6>
                                        <h5 class="mb-3 mt-0"><?= rp($tbg_bersih2); ?> Kg</h5>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-tag-text-outline display-2 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Debet</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">TBS RAMP</h6>
                                        <h5 class="mb-3 mt-0"><?= rp($jumlah_tbg_keluar); ?> Kg</h5>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-briefcase-check display-2 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Kredit</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">BRD RAMP</h6>
                                        <h5 class="mb-3 mt-0"><?= rp($tbg_bersih22); ?> Kg</h5>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-tag-text-outline display-2 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Debet</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">BRD RAMP</h6>
                                        <h5 class="mb-3 mt-0"><?= rp($jumlah_tbg_keluar22); ?> Kg</h5>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-briefcase-check display-2 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Latest Trasaction TBS</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="text-center align-middle bg-primary text-dark">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Suplayer</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Komoditas</th>
                                                <th scope="col">Suplayer</th>
                                                <th scope="col">Timbang Bersih</th>
                                                <th scope="col">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = mysqli_query($koneksi, "select * from ta_transaksi where time_stamp like '%$tahun%' and jenis2 like '%tbs%' order by time_stamp desc limit 3");
                                            while ($data = mysqli_fetch_array($query)) :
                                            ?>
                                                <tr class="align-middle">
                                                    <th class="text-center aling-middle" scope="row"><?= $no++; ?></th>
                                                    <td><i class="fa fa-user"></i> &emsp; <?= $data['nm_suplayer']; ?></td>
                                                    <td class="text-center"><?= $data['time_stamp']; ?></td>
                                                    <td class="text-center"><?= $data['jenis2']; ?></td>
                                                    <td class="text-center"><?= $data['jenis']; ?></td>
                                                    <td class="text-center"><?= rp($data['tbg_bersih']); ?> Kg</td>
                                                    <td class="text-center">Rp. <?= rp($data['jumlah']); ?> ,-</td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Latest Trasaction BRD</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="text-center bg-primary text-dark">
                                                <th scope="col">(#) Id</th>
                                                <th scope="col">Nama Suplayer</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Komoditas</th>
                                                <th scope="col">Suplayer</th>
                                                <th scope="col">Timbang Bersih</th>
                                                <th scope="col">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = mysqli_query($koneksi, "select * from ta_transaksi where time_stamp like '%$tahun%' and jenis2 like '%brd%' order by time_stamp desc limit 3");
                                            while ($data = mysqli_fetch_array($query)) :
                                            ?>
                                                <tr class="align-middle">
                                                    <th class="text-center aling-middle" scope="row"><?= $no++; ?></th>
                                                    <td><i class="fa fa-user"></i> &emsp; <?= $data['nm_suplayer']; ?></td>
                                                    <td class="text-center"><?= $data['time_stamp']; ?></td>
                                                    <td class="text-center"><?= $data['jenis2']; ?></td>
                                                    <td class="text-center"><?= $data['jenis']; ?></td>
                                                    <td class="text-center"><?= rp($data['tbg_bersih']); ?> Kg</td>
                                                    <td class="text-center">Rp. <?= rp($data['jumlah']); ?> ,-</td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 " style="text-align:start;">
                                        <h4 class="mt-0 header-title mb-4">Log System</h4>
                                    </div>
                                    <div class="col-md-6 " style="text-align:end;">
                                        <form action="f-clear-log.php" method="POST">
                                            <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modalClearLog" name="bhapus"><i class="fa fa-trash"></i> Bersihkan Log</button>
                                        </form>
                                    </div>
                                </div>
                                <?php include('modal-clear-log.php'); ?>

                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="align-middle bg-primary text-dark">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Perihal</th>
                                                <th scope="col">Pesan</th>
                                                <th scope="col">Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = mysqli_query($koneksi, "select * from log order by time_stamp desc limit 5");
                                            while ($data = mysqli_fetch_array($query)) :
                                            ?>
                                                <tr class="align-middle">
                                                    <td width="10" class="text-center"><?= $no++; ?></td>
                                                    <td width="100"><i class="fa fa-user"></i> &emsp; <?= $data['username'] ?></td>
                                                    <td width="100"><?= $data['hal']; ?></td>
                                                    <td width="300"><?= $data['pesan']; ?></td>
                                                    <td width="100"><?= $data['time_stamp']; ?></td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

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

    <script src="<?= $base_url ?>/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Peity JS -->
    <script src="<?= $base_url ?>/plugins/peity/jquery.peity.min.js"></script>

    <script src="<?= $base_url ?>/plugins/morris/morris.min.js"></script>
    <script src="<?= $base_url ?>/plugins/raphael/raphael-min.js"></script>

    <script src="<?= $base_url ?>/assets/pages/dashboard.js"></script>

    <!-- App js -->
    <script src="<?= $base_url ?>/assets/js/app.js"></script>

</body>

</html>