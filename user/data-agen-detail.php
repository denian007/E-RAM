<?php
include('session.php');
include('read-suplayer-agen.php');
//echo print_r($_SESSION);
if ($_SESSION['level'] == "") {
    header("location:../index?id=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../meta.php'); ?>
    <title>Data Suplayer Agen</title>
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

                        <h4 class="page-title">Data Suplayer Detail</h4>

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
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "select * from ta_suplayer where id='$_GET[x]'");
                                    while ($data = mysqli_fetch_array($query)) :
                                        $nm_suplayer = $data['nm_suplayer'];
                                    ?>
                                    <?php endwhile; ?>
                                    <div class="col-md-12">
                                        <a target="_blank" href="data-agen-cetak?x=<?= $_GET['x'] ?>&kategori=<?= $_GET['kategori'] ?>&nm=<?= $nm_suplayer ?>" class="btn btn-outline-warning btn-block"><i class="fa fa-print"></i> Cetak Cicilan Panjar TBS/BRD</a>
                                        <a target="_blank" href="data-agen-cetak-all?x=<?= $_GET['x'] ?>&kategori=<?= $_GET['kategori'] ?>&nm=<?= $nm_suplayer ?>" class="btn btn-outline-primary btn-block"><i class="fa fa-print"></i> Cetak Semua Transaksi <?= $nm_suplayer; ?></a>
                                    </div>
                                </div>
                                <table style="width: 100%;font-size:16px;">
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "select sum(b.ptg_hutang) as sum_ptg_hutang from ta_suplayer a left join ta_transaksi b on a.nm_suplayer=b.nm_suplayer where a.id='$_GET[x]' and b.jenis='$_GET[kategori]'");
                                        while ($data = mysqli_fetch_array($query)) :
                                            $sum_ptg_hutang = $data['sum_ptg_hutang'];
                                        ?>
                                        <?php endwhile; ?>
                                        <?php
                                        $query = mysqli_query($koneksi, "select * from ta_suplayer where id='$_GET[x]'");
                                        while ($data = mysqli_fetch_array($query)) :
                                            $nm_suplayer = $data['nm_suplayer'];
                                        ?>
                                            <tr>
                                                <td width="200">Nama</td>
                                                <td width="1">:</td>
                                                <td><b> <?= $data['nm_suplayer']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Kategori</td>
                                                <td>:</td>
                                                <td><b> <?= $data['jenis']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Kontak/Hp</td>
                                                <td>:</td>
                                                <td><b> <?= $data['hp']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td>Panjar TBS/BRD</td>
                                                <td>:</td>
                                                <td><b> Rp.<?= rp($data['panjar_tbs']); ?>,-</b></td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Cicilan</td>
                                                <td>:</td>
                                                <td><b> Rp.<?= rp($sum_ptg_hutang); ?>,-</b></td>
                                            </tr>
                                            <tr>
                                                <td>Sisa Panjar TBS/BRD</td>
                                                <td>:</td>
                                                <td><b> Rp.<?= rp($data['panjar_tbs'] - $sum_ptg_hutang); ?>,-</b></td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <hr>
                                        <h3>Cicilan Panjar TBS/BRD</h3>
                                        <hr>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered dt-responsive nowrap mt-2" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr class="align-middle text-center bg-primary text-dark">
                                                <th width="5">No</th>
                                                <th>Tanggal</th>
                                                <th width="200">Netto</th>
                                                <th width="300">Komoditas</th>
                                                <th width="200">Cicilan Panjar TBS/BRD</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = mysqli_query($koneksi, "select * from ta_suplayer a left join ta_transaksi b on a.nm_suplayer=b.nm_suplayer where a.id='$_GET[x]' and b.jenis='$_GET[kategori]'");
                                            while ($data = mysqli_fetch_array($query)) :
                                                $nm_suplayer = $data['nm_suplayer'];
                                                $jenis = $data['jenis'];
                                            ?>
                                                <tr class="align-middle">
                                                    <td class="text-center"><?= $no++; ?></td>
                                                    <td><b><?= tgl_indo($data['tanggal']); ?></b></td>
                                                    <td class="text-center"><?= rp($data['tbg_bersih']); ?> Kg</td>
                                                    <td class="text-center"><?= $data['jenis2']; ?></td>
                                                    <td class="text-center">Rp.<?= rp($data['ptg_hutang']); ?>,-</td>
                                                </tr>
                                                <?php include('modal-update-suplayer.php'); ?>
                                                <script>
                                                    $('.bhapus<?= $data['id']; ?>').on('click', function(e) {
                                                        e.preventDefault();
                                                        const href = $(this).attr('href');
                                                        Swal.fire({
                                                            title: 'Perhatian !',
                                                            text: "Apakah anda yakin ingin suplayer <?= $data['nm_suplayer'] ?>?",
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
                                            <?php endwhile; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="bg-primary text-dark">
                                                <td colspan="4" style="text-align: end;"><b>Jumlah</b></td>
                                                <td class="text-center"><b>Rp.<?= rp($sum_ptg_hutang); ?>,-</b></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

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