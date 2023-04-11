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
                                <p class="text-head"></p>
                                <form action="f-add-buah-keluar.php" method="POST">
                                    <?php
                                    $query = mysqli_query($koneksi, "select * from ta_buah_keluar where id='$_GET[id]'");
                                    while ($data = mysqli_fetch_array($query)) :
                                        $id = $data['id'];
                                        $register = $data['register'];
                                        $pabrik_tujuan = $data['pabrik_tujuan'];
                                        $pabrik_tujuan2 = $data['pabrik_tujuan2'];
                                        $alamat_pabrik = $data['alamat_pabrik'];
                                        $tbg_kosong = $data['tbg_kosong'];
                                        $tbg_mobil_buah = $data['tbg_mobil_buah'];
                                        $tbg_buah = $data['tbg_buah'];
                                        $berat_buah = $data['berat_buah'];
                                        $rata_rata_buah = $data['rata_rata_buah'];
                                        $plat = $data['plat'];
                                        $nm_sopir = $data['nm_sopir'];
                                        $hp = $data['hp'];
                                        $nm_pengirim = $data['nm_pengirim'];
                                        $tanggal = $data['tanggal'];

                                    ?>
                                    <?php endwhile; ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="hidden" style="display: none;">
                                                <input type="text" class="form-control" name="time_stamp" value="<?= $time_stamp ?>">
                                                <input type="text" class="form-control" name="id" value="<?= $id ?>">
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td width="100">Register</td>
                                                        <td width="1">:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="register" id="register" value="<?= $register ?>" readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $tanggal ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Sopir</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="nm_sopir" id="nm_sopir" value="<?= $nm_sopir ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hp</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="hp" id="hp" value="<?= $hp ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Polisi Mobil</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="nm_mobil" id="nm_mobil" value="<?= $plat ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobil Kosong</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control bg-danger text-dark" name="mobil_kosong" id="mobil_kosong" value="<?= $tbg_kosong ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobil + Buah</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control bg-primary text-dark" name="mobil_buah" id="mobil_buah" value="<?= $tbg_mobil_buah ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Berat Bersih Buah</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="bb_buah" id="bb_buah" value="<?= $tbg_buah ?>" readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Berat Rata TBS</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control bg-warning text-dark" name="tbs_rata" id="tbs_rata" value="<?= $berat_buah ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total TBS</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="total_tbs" id="total_tbs" value="<?= $rata_rata_buah ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pabrik Tujuan Singkat</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="pabrik_tujuan" class="form-control" id="pabrik_tujuan" required>
                                                                <option value="<?= $pabrik_tujuan ?>"><?= $pabrik_tujuan ?></option>
                                                                <?php
                                                                $pilih_pabrik = array();
                                                                $query = mysqli_query($koneksi, "select * from daftar_pabrik");
                                                                while ($data = mysqli_fetch_array($query)) :
                                                                    $pilih_pabrik[$data['nm_pabrik_singkat']] = $data;
                                                                ?>
                                                                    <option value="<?= $data['nm_pabrik_singkat']; ?>"><?= $data['nm_pabrik_singkat']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pabrik Tujuan</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="pabrik_tujuan2" class="form-control" id="pabrik_tujuan2">
                                                                <option value="<?= $pabrik_tujuan2 ?>"><?= $pabrik_tujuan2 ?></option>
                                                                <script>
                                                                    var ambil_komponen1 = <?php echo json_encode($pilih_pabrik); ?>;
                                                                    console.log(ambil_komponen1);
                                                                    jQuery(document).ready(function() {
                                                                        jQuery('select[name="pabrik_tujuan"]').on('change',
                                                                            function() {
                                                                                var set = jQuery(this).val();
                                                                                jQuery('select[name="pabrik_tujuan2"]').html(
                                                                                    '<option value="' + ambil_komponen1[
                                                                                        set].nm_full_pabrik + '">' +
                                                                                    ambil_komponen1[set].nm_full_pabrik + '</option>');
                                                                            });
                                                                    });
                                                                </script>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Pabrik</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="pabrik_tujuan3" class="form-control" id="pabrik_tujuan3">
                                                                <option value="<?= $alamat_pabrik ?>"><?= $alamat_pabrik ?></option>
                                                                <script>
                                                                    var ambil_komponen1 = <?php echo json_encode($pilih_pabrik); ?>;
                                                                    console.log(ambil_komponen1);
                                                                    jQuery(document).ready(function() {
                                                                        jQuery('select[name="pabrik_tujuan"]').on('change',
                                                                            function() {
                                                                                var set = jQuery(this).val();
                                                                                jQuery('select[name="pabrik_tujuan3"]').html(
                                                                                    '<option value="' + ambil_komponen1[
                                                                                        set].alamat_pabrik + '">' +
                                                                                    ambil_komponen1[set].alamat_pabrik + '</option>');
                                                                            });
                                                                    });
                                                                </script>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Pengirim</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="nm_pengirim" id="nm_pengirim" value="<?= $nm_pengirim ?>" required>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12" style="text-align: end;">
                                            <a href="" class="btn btn-outline-danger mt-3"><i class="fas fa-undo-alt"></i> kembali</a>
                                            <button type="submit" name="bsimpan" class="btn btn-outline-primary mt-3 ml-2"><i class="fa fa-save"></i> Simpan</button>
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
    <script>
        $("#mobil_kosong").keyup(function() {
            var a = parseInt($("#mobil_kosong").val());
            var b = parseInt($("#mobil_buah").val());
            var ab = b - a;
            $("#bb_buah").val(ab);
        });
        $("#mobil_buah").keyup(function() {
            var a = parseInt($("#mobil_kosong").val());
            var b = parseInt($("#mobil_buah").val());
            var ab = b - a;
            $("#bb_buah").val(ab);
        });
    </script>
    <script>
        $("#tbs_rata").keyup(function() {
            var a = parseInt($("#tbs_rata").val());
            var b = parseInt($("#mobil_buah").val());
            var ab = b / a;
            $("#total_tbs").val(ab);
        });
    </script>



</body>

</html>