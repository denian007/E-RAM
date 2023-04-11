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
    <title>Form Input Transaksi Petani</title>
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

                        <h4 class="page-title"> Form Input Transaksi Petani </h4>
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
                                <form action="f-add-transaksi-petani.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12" style="display: none;">
                                            <input type="text" name="jenis" class="form-control" value="petani">
                                            <input type="text" class="form-control" name="time_stamp" value="<?= $time_stamp ?>" readonly>
                                            <input type="text" name="jenis2" class="form-control" value="<?= $_GET['komoditas'] ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <b>Nama Suplayer</b>
                                                <select name="nm_suplayer" class="form-control select2" required oninvalid="this.setCustomValidity('Pilih Subplayer')" oninput="setCustomValidity('')">
                                                    <option value=""></option>
                                                    <?php
                                                    $pilih_suplayer = array();
                                                    $query = mysqli_query($koneksi, "select * from ta_suplayer where jenis='petani'");
                                                    while ($data = mysqli_fetch_array($query)) :
                                                        $pilih_suplayer[$data['nm_suplayer']] = $data;
                                                    ?>
                                                        <option value="<?= $data['nm_suplayer'] ?>"><?= $data['nm_suplayer'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <b>Kontak</b>
                                                <select name="hp" class="form-control">
                                                    <script>
                                                        var ambil_komponen1 = <?php echo json_encode($pilih_suplayer); ?>;
                                                        console.log(ambil_komponen1);
                                                        jQuery(document).ready(function() {
                                                            jQuery('select[name="nm_suplayer"]').on('change',
                                                                function() {
                                                                    var set = jQuery(this).val();
                                                                    jQuery('select[name="hp"]').html(
                                                                        '<option value="' + ambil_komponen1[
                                                                            set].hp + '">' +
                                                                        ambil_komponen1[set].hp + '</option>');
                                                                });
                                                        });
                                                    </script>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <b>Panjar TBS/BRD</b>
                                                <select name="panjar_tbs" class="form-control">
                                                    <script>
                                                        var ambil_komponen1 = <?php echo json_encode($pilih_suplayer); ?>;
                                                        console.log(ambil_komponen1);
                                                        jQuery(document).ready(function() {
                                                            jQuery('select[name="nm_suplayer"]').on('change',
                                                                function() {
                                                                    var set = jQuery(this).val();
                                                                    jQuery('select[name="panjar_tbs"]').html(
                                                                        '<option value="' + ambil_komponen1[
                                                                            set].panjar_tbs + '">' +
                                                                        ambil_komponen1[set].panjar_tbs + '</option>');
                                                                });
                                                        });
                                                    </script>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <b>Tanggal</b>
                                                <input type="date" class="form-control" name="tanggal" value="<?= date('Y-m-d') ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-5">
                                            <div class="form-group row">
                                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Timbang Masuk</label>
                                                <div class="col-sm-8">
                                                    <small>Kg</small>
                                                    <input class="form-control bg-primary text-dark" name="tbg_masuk" id="tbg_masuk" type="number" value="0" required oninvalid="this.setCustomValidity('Masukan Timbangan Masuk')" oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Timbang Keluar</label>
                                                <div class="col-sm-8">
                                                    <small>Kg</small>
                                                    <input class="form-control bg-primary text-dark" name="tbg_keluar" id="tbg_keluar" type="number" value="0" required oninvalid="this.setCustomValidity('Masukan Timbangan Masuk')" oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Timbang Kotor</label>
                                                <div class="col-sm-8">
                                                    <small>Kg</small>
                                                    <input class="form-control" name="tbg_kotor" id="tbg_kotor" type="number" value="0" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->

                                        <div class="col-md-4 mt-5">
                                            <div class="form-group row">
                                                <label for="tbg_masuk" class="col-sm-3 col-form-label">Potongan Wajib</label>
                                                <div class="col-sm-3">
                                                    <small>Persen</small>
                                                    <input class="form-control bg-primary text-dark" name="ptg_persen" id="ptg_persen" type="text" value="<?= $persen_petani_tbs ?>">
                                                </div>
                                                <div class="col-sm-3">
                                                    <small>Persen #2</small>
                                                    <input class="form-control bg-primary text-dark" name="ptg_persen2" id="ptg_persen2" type="text" value="0">
                                                </div>
                                                <div class="col-sm-3">
                                                    <small>Kg</small>
                                                    <input class="form-control bg-primary text-dark" name="ptg_kg" id="ptg_kg" type="text" value="0">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="tbg_masuk" class="col-sm-3 col-form-label">Timbang Bersih</label>
                                                <div class="col-sm-9">
                                                    <small>Kg</small>
                                                    <input class="form-control" name="tbg_bersih" id="tbg_bersih" type="number" value="0" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-5">
                                            <div class="form-group row">
                                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Harga</label>
                                                <div class="col-sm-8">
                                                    <small>Rp</small>
                                                    <input class="form-control bg-primary text-dark" name="harga" id="harga" type="number" value="<?= $harga_petani_tbs ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Potong Hutang</label>
                                                <div class="col-sm-8">
                                                    <small>Rp</small>
                                                    <input class="form-control bg-primary text-dark" name="ptg_hutang" id="ptg_hutang" type="number" value="0">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tbg_masuk" class="col-sm-4 col-form-label">Jumlah Bayar</label>
                                                <div class="col-sm-8">
                                                    <small>Rp</small>
                                                    <input class="form-control text-dark jumlah" name="jumlah" id="jumlah" type="number" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-5">
                                            <div class="form-group">
                                                <b>Keterangan</b>
                                                <textarea name="ket" id="ket" class="form-control" placeholder="Masukan Catatan Jika Perlu"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3" style="text-align: end;">
                                            <a href="transaksi-petani" class="btn btn-outline-danger"><i class="fas fa-undo-alt"></i> Kembali</a>
                                            <button type="submit" class="btn btn-outline-primary ml-2" name="bsimpan"><i class="fa fa-save"></i> Simpan</button>
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
        $('.bhapus').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            Swal.fire({
                title: 'Perhatian !',
                text: "Apakah anda yakin ingin menghapus data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                }
            })
        })
    </script>
    <script>
        $("#tbg_masuk").keyup(function() {
            var a = parseInt($("#tbg_masuk").val());
            var b = parseInt($("#tbg_keluar").val());
            var c = parseInt($("#tbg_kotor").val());
            var d = Number(document.getElementById('ptg_persen').value);
            var e = Number(document.getElementById('ptg_persen2').value);
            var f = parseInt($("#ptg_kg").val());
            var harga = parseInt($("#harga").val());
            var hutang = parseInt($("#ptg_hutang").val());
            var jumlah = parseInt($("#jumlah").val());
            var ab = a - b;
            var de = d + e;
            var abc = ab * de / 100;
            var abcd = ab - abc;
            var abcde = abcd * harga - hutang;
            $("#tbg_bersih").val(abcd);
            $("#tbg_kotor").val(ab);
            $("#ptg_kg").val(abc);
            $("#jumlah").val(abcde);

        });
        $("#tbg_keluar").keyup(function() {
            var a = parseInt($("#tbg_masuk").val());
            var b = parseInt($("#tbg_keluar").val());
            var c = parseInt($("#tbg_kotor").val());
            var d = Number(document.getElementById('ptg_persen').value);
            var e = Number(document.getElementById('ptg_persen2').value);
            var f = parseInt($("#ptg_kg").val());
            var harga = parseInt($("#harga").val());
            var hutang = parseInt($("#ptg_hutang").val());
            var jumlah = parseInt($("#jumlah").val());
            var ab = a - b;
            var de = d + e;
            var abc = ab * de / 100;
            var abcd = ab - abc;
            var abcde = abcd * harga - hutang;
            $("#tbg_bersih").val(abcd);
            $("#tbg_kotor").val(ab);
            $("#ptg_kg").val(abc);
            $("#jumlah").val(abcde);

        });
        $("#ptg_kg").keyup(function() {
            var a = parseInt($("#ptg_kg").val());
            var b = parseInt($("#tbg_kotor").val());
            var harga = parseInt($("#harga").val());
            var hutang = parseInt($("#ptg_hutang").val());
            var jumlah = parseInt($("#jumlah").val());
            var ab = b - a;
            var abcde = ab * harga;
            $("#tbg_bersih").val(ab);
            $("#jumlah").val(abcde);

        });
    </script>
    <script>
        $("#ptg_persen").keyup(function() {
            var a = parseInt($("#tbg_masuk").val());
            var b = parseInt($("#tbg_keluar").val());
            var c = parseInt($("#tbg_kotor").val());
            var d = Number(document.getElementById('ptg_persen').value);
            var e = Number(document.getElementById('ptg_persen2').value);
            var f = parseInt($("#ptg_kg").val());
            var harga = parseInt($("#harga").val());
            var hutang = parseInt($("#ptg_hutang").val());
            var jumlah = parseInt($("#jumlah").val());
            var ab = a - b;
            var de = d + e;
            var abc = ab * de / 100;
            var abcd = ab - abc;
            var abcde = abcd * harga - hutang;
            $("#tbg_bersih").val(abcd);
            $("#tbg_kotor").val(ab);
            $("#ptg_kg").val(abc);
            $("#jumlah").val(abcde);

        });
        $("#ptg_persen2").keyup(function() {
            var a = parseInt($("#tbg_masuk").val());
            var b = parseInt($("#tbg_keluar").val());
            var c = parseInt($("#tbg_kotor").val());
            var d = Number(document.getElementById('ptg_persen').value);
            var e = Number(document.getElementById('ptg_persen2').value);
            var f = parseInt($("#ptg_kg").val());
            var harga = parseInt($("#harga").val());
            var hutang = parseInt($("#ptg_hutang").val());
            var jumlah = parseInt($("#jumlah").val());
            var ab = a - b;
            var de = d + e;
            var abc = ab * de / 100;
            var abcd = ab - abc;
            var abcde = abcd * harga - hutang;
            $("#tbg_bersih").val(abcd);
            $("#tbg_kotor").val(ab);
            $("#ptg_kg").val(abc);
            $("#jumlah").val(abcde);

        });
        $("#ptg_hutang").keyup(function() {
            var a = parseInt($("#ptg_hutang").val());
            var b = parseInt($("#jumlah").val());
            var ab = b - a;
            $("#jumlah").val(ab);
        });
        $("#harga").keyup(function() {
            var a = parseInt($("#harga").val());
            var b = parseInt($("#tbg_bersih").val());
            var ab = b * a;
            $("#jumlah").val(ab);
        });
    </script>


</body>

</html>