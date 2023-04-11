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
    <title>Pengaturan Aplikasi</title>
    <link rel="shortcut icon" href="<?= $base_url ?>/logo.png">

    <!-- DataTables -->
    <link href="<?= $base_url ?>/plugins//datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $base_url ?>/plugins//datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?= $base_url ?>/plugins//datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="<?= $base_url ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $base_url ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= $base_url ?>/assets/css/style.css" rel="stylesheet" type="text/css">
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

                        <h4 class="page-title">Pengaturan Aplikasi</h4>

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
                                <form action="f-update-pengaturan-ramp.php" method="POST">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td width="200">Nama RAMP</td>
                                                        <td width="10">:</td>
                                                        <td width="500">
                                                            <input type="text" class="form-control" name="nm_ram" value="<?= $nm_ramp ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="200">Kontak</td>
                                                        <td width="10">:</td>
                                                        <td width="500">
                                                            <input type="text" class="form-control" name="kontak" value="<?= $kontak ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="200">Alamat RAMP</td>
                                                        <td width="10">:</td>
                                                        <td width="500">
                                                            <textarea name="alamat" class="form-control"><?= $alamat ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table text-dark ">
                                                <tbody>
                                                    <tr class="bg-info">
                                                        <td width="200">Harga / Potongan TBS Agen</td>
                                                        <td width="1">:</td>
                                                        <td width="200">
                                                            <input type="number" class="form-control" name="persen_agen" value="<?= $persen_agen_tbs ?>">
                                                        </td>
                                                        <td width="200">
                                                            <input type="number" class="form-control" name="harga_agen" value="<?= $harga_agen_tbs ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-primary">
                                                        <td width="200">Harga / Potongan TBS Petani</td>
                                                        <td width="1">:</td>
                                                        <td width="200">
                                                            <input type="number" class="form-control" name="persen_petani" value="<?= $persen_petani_tbs ?>">
                                                        </td>
                                                        <td width="200">
                                                            <input type="number" class="form-control" name="harga_petani" value="<?= $harga_petani_tbs ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-danger">
                                                        <td width="200">Harga / Potongan BRD Petani</td>
                                                        <td width="1">:</td>
                                                        <td width="200">
                                                            <input type="number" class="form-control" name="persen_brd_agen" value="<?= $persen_agen_brd ?>">
                                                        </td>
                                                        <td width="200">
                                                            <input type="number" class="form-control" name="harga_brd_agen" value="<?= $harga_agen_brd ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-warning">
                                                        <td width="200">Harga / Potongan BRD Agen</td>
                                                        <td width="1">:</td>
                                                        <td width="200">
                                                            <input type="number" class="form-control" name="persen_brd_petani" value="<?= $persen_petani_brd ?>">
                                                        </td>
                                                        <td width="200">
                                                            <input type="number" class="form-control" name="harga_brd_petani" value="<?= $harga_petani_brd ?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12 row">
                                            <div class="col-md-6">
                                                <a href="index" class="btn btn-outline-danger btn-block mt-3"><i class="fa fa-home"></i> Kembali</a>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" name="bsimpan" class="btn btn-outline-primary btn-block mt-3"><i class="fa fa-save"></i> Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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