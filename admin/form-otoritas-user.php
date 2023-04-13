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

                        <h4 class="page-title"> Form Otoritas User </h4>
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
                                <form action="f-otoritas-user.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <tbody>
                                                    <?php
                                                    $query = mysqli_query($koneksi, "select * from ta_user where id='$_GET[x]'");
                                                    while ($data = mysqli_fetch_array($query)) :
                                                        $id = $data['id'];
                                                        $nama_user = $data['nama'];
                                                        $username_user = $data['username'];
                                                        $password_user = $data['password'];
                                                        $status = $data['status'];
                                                        $nm_otoritas = $data['nm_otoritas'];
                                                        $otoritas1 = $data['otoritas1'];
                                                        $otoritas2 = $data['otoritas2'];
                                                    ?>
                                                    <?php endwhile; ?>
                                                    <input type="text" class="form-control" name="id" value="<?= $id; ?>" style="display:none;">
                                                    <tr>
                                                        <td width="100">Nama</td>
                                                        <td width="5">:</td>
                                                        <td><input type="text" class="form-control" name="nm_user" value="<?= $nama_user; ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Username</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="username_user" value="<?= $username_user; ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Password</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="password_user" value="<?= $password_user; ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="status" class="form-control select2">
                                                                <option value="<?= $status; ?>"><?= $status; ?></option>
                                                                <option value="on">On</option>
                                                                <option value="off">Off</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Otoritas</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="nm_otoritas" class="form-control select2">
                                                                <option value="<?= $nm_otoritas; ?>"><?= $nm_otoritas; ?></option>
                                                                <?php
                                                                $pilih_otoritas = array();
                                                                $query = mysqli_query($koneksi, "select * from ta_otoritas");
                                                                while ($data = mysqli_fetch_array($query)) :
                                                                    $pilih_otoritas[$data['nm_otoritas']] = $data;
                                                                ?>
                                                                    <option value="<?= $data['nm_otoritas']; ?>"><?= $data['nm_otoritas']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr style="display: none;">
                                                        <td>Otoritas 1</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="otoritas1" class="form-control">
                                                                <option value="<?= $otoritas1 ?>"><?= $otoritas1; ?></option>
                                                                <script>
                                                                    var ambil_komponen1 = <?php echo json_encode($pilih_otoritas); ?>;
                                                                    console.log(ambil_komponen1);
                                                                    jQuery(document).ready(function() {
                                                                        jQuery('select[name="nm_otoritas"]').on('change',
                                                                            function() {
                                                                                var set = jQuery(this).val();
                                                                                jQuery('select[name="otoritas1"]').html(
                                                                                    '<option value="' + ambil_komponen1[
                                                                                        set].otoritas1 + '">' +
                                                                                    ambil_komponen1[set].otoritas1 + '</option>');
                                                                            });
                                                                    });
                                                                </script>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr style="display: none;">
                                                        <td>Otoritas 2</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="otoritas2" class="form-control">
                                                                <option value="<?= $otoritas2 ?>"><?= $otoritas2; ?></option>
                                                                <script>
                                                                    var ambil_komponen1 = <?php echo json_encode($pilih_otoritas); ?>;
                                                                    console.log(ambil_komponen1);
                                                                    jQuery(document).ready(function() {
                                                                        jQuery('select[name="nm_otoritas"]').on('change',
                                                                            function() {
                                                                                var set = jQuery(this).val();
                                                                                jQuery('select[name="otoritas2"]').html(
                                                                                    '<option value="' + ambil_komponen1[
                                                                                        set].otoritas2 + '">' +
                                                                                    ambil_komponen1[set].otoritas2 + '</option>');
                                                                            });
                                                                    });
                                                                </script>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12" style="text-align: end;">
                                            <button type="button" class="btn btn-secondary" onclick="history.back(-1)"><i class="fas fa-undo-alt"></i> Kembali</button>
                                            <button type="submit" name="bsimpan" class="btn btn-outline-primary"><i class="fas fa-save"></i> Simpan</button>
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