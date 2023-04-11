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
    <title>Form Input Transaksi Agen</title>
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

                        <h4 class="page-title"> Form Input Transaksi Agen </h4>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->

        </div>
        <!-- page-title-box -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-20">
                            <div class="card-body mb-5">

                                <h4 class="mt-0 header-title">Form Pengisian Biodata Suplayer</h4>
                                <p class="text-muted m-b-30"></p>

                                <form action="f-add-data-suplayer.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12" style="display: none;">
                                            <input type="text" class="form-control" name="jenis" value="<?= $_GET['jenis']; ?>">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <b>Nama Suplayer</b>
                                            <input type="text" class="form-control" name="nm_suplayer" required oninvalid="this.setCustomValidity('Masukan Nama Suplayer')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <b>Kontak / Hp</b>
                                            <input type="number" class="form-control" name="hp" value="08" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <b>Alamat</b>
                                            <textarea name="alamat" class="form-control" rows="1" required oninvalid="this.setCustomValidity('Masukan Alamat Suplayer')" oninput="setCustomValidity('')"></textarea>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <b>Panjas TBS / BRD</b>
                                            <input type="number" class="form-control" name="panjar_tbs" value="0" placeholder="Jika Tidak ada masukan angka NOL" required>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12" style="text-align: end;">
                                            <a href="" class="btn btn-secondary"><i class="mdi mdi-replay"></i> Batal</a>
                                            <button type="submit" class="btn btn-primary" name="bsimpan"><i class="fa fa-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

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
    <script src=" <?= $base_url ?>/assets/js/jquery.min.js"></script>
    <script src="<?= $base_url ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>/assets/js/jquery.slimscroll.js"></script>
    <script src="<?= $base_url ?>/assets/js/waves.min.js"></script>

    <script src="<?= $base_url ?>/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= $base_url ?>/plugins/bootstrap-md-datetimepicker/js/moment-with-locales.min.js"></script>

    <!-- Plugins js -->
    <script src="<?= $base_url ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

    <script src="<?= $base_url ?>/plugins/bootstrap-md-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <script src="<?= $base_url ?>/plugins/select2/js/select2.min.js"></script>
    <script src="<?= $base_url ?>/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="<?= $base_url ?>/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
    <script src="<?= $base_url ?>/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Plugins Init js -->
    <script src="<?= $base_url ?>/assets/pages/form-advanced.js"></script>

    <!-- App js -->
    <script src="<?= $base_url ?>/assets/js/app.js"></script>

    <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function() {
            // Format mata uang.
            $('.uang').mask('0.000.000.000', {
                reverse: true
            });
        })
    </script> -->



</body>

</html>