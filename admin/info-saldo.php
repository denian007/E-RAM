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
    <title>Info Saldo</title>
    <link rel="shortcut icon" href="<?= $base_url ?>/assets/images/favicon.ico">
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

                        <h4 class="page-title"> Info Saldo </h4>
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
                            <div class="card-body">
                                <h4 class="mt-0 header-title"></h4>
                                <p class="text-muted m-b-30"></p>
                                <table class="table font-20">
                                    <tbody>
                                        <tr>
                                            <td width="150">Sisa Saldo</td>
                                            <td width="1">:</td>
                                            <td>
                                                <b>Rp. <?= rp($sum_saldo_k); ?> ,-</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title"></h4>
                                <p class="text-muted m-b-30"></p>
                                <a href="javascript:void(0);" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalTambahSaldo"><i class="fa fa-plus"></i> Tambah Saldo</a>
                                <?php include('modal-tambah-saldo.php'); ?>
                                <table class="table table-bordered table-hover mt-5">
                                    <thead>
                                        <tr class="align-middle text-center bg-primary text-dark">
                                            <th width="5">No</th>
                                            <th>Nama Penyetor</th>
                                            <th width="200">Jumlah</th>
                                            <th width="200">Tanggal</th>
                                            <th width="200">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "select * from ta_saldo where time_stamp like '%$tahun%' order by time_stamp desc limit 10");
                                        while ($data = mysqli_fetch_array($query)) :
                                        ?>
                                            <tr class="align-middle">
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td><?= $data['nm_penyetor']; ?></td>
                                                <td class="text-center">Rp. <?= rp($data['jumlah']); ?> ,-</td>
                                                <td class="text-center"><?= tgl_indo($data['tanggal']); ?></td>
                                                <td class="text-center">
                                                    <!-- <a href="" class="btn btn-outline-primary ml-2"><i class="fa fa-eye"></i></a>
                                                    <a href="" class="btn btn-outline-success ml-2"><i class="fa fa-edit"></i></a> -->
                                                    <a href="info-saldo?hal=hapus&id=<?= $data['id'] ?>" class="btn btn-outline-danger ml-2 bhapus"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
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
    <script src="<?= $base_url ?>/assets/js/jquery.min.js"></script>
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

</body>

</html>