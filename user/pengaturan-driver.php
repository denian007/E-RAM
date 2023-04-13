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
    <title>Pengaturan Driver</title>
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

                        <h4 class="page-title"> Pengaturan Driver </h4>
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
                                <p class="text-head"></p>
                                <form action="f-pengaturan-driver.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table style="width: 100%;" class="table-stripped table-hover table-success p-5">
                                                <tbody>
                                                    <?php
                                                    $query = mysqli_query($koneksi, "select * from ta_driver where id='1'");
                                                    while ($data = mysqli_fetch_array($query)) :
                                                    ?>
                                                        <tr style="display: none;">
                                                            <td width="130"><b> ID</b></td>
                                                            <td width="1">:</td>
                                                            <td>
                                                                <input type="text" class="form-control" name="id" value="<?= $data['id'] ?>" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="130"><b> Nama</b></td>
                                                            <td width="1">:</td>
                                                            <td>
                                                                <input type="text" class="form-control" name="nm_driver" value="<?= $data['nm_driver'] ?>">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="130"><b> Kontak/Hp</b></td>
                                                            <td width="1">:</td>
                                                            <td>
                                                                <input type="text" class="form-control" name="hp" value="<?= $data['hp'] ?>">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="130"><b> Alamat</b></td>
                                                            <td width="1">:</td>
                                                            <td>
                                                                <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="130"><b> Nama Kendaraan</b></td>
                                                            <td width="1">:</td>
                                                            <td>
                                                                <input type="text" class="form-control" name="nm_mobil" value="<?= $data['nm_mobil'] ?>">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="130"><b> Nomor Polisi</b></td>
                                                            <td width="1">:</td>
                                                            <td>
                                                                <input type="text" class="form-control" name="plat" value="<?= $data['plat'] ?>">
                                                            </td>
                                                        </tr>
                                                    <?php endwhile; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12 mt-5">
                                            <button type="submit" name="bsimpan" class="btn btn-outline-primary btn-block"><i class="fas fa-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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



</body>

</html>