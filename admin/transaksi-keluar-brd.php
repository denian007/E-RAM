<?php
include('session.php');
include('read-buah-keluar-brd.php');
//echo print_r($_SESSION);
if ($_SESSION['level'] == "") {
    header("location:../index?id=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../meta.php'); ?>
    <title>Transaksi Buah Keluar</title>
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

                        <h4 class="page-title">Transaksi Buah Keluar</h4>

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
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <a href="form-transasi-buah-keluar?komoditas=brd" class="btn btn-outline-primary"> <i class="fa fa-plus"></i> Tambah Transaksi</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr class="align-middle text-center bg-primary text-dark">
                                                <th width="5">No</th>
                                                <th>Pabrik Tujuan</th>
                                                <th width="150">Sopir</th>
                                                <th width="50">Bruto</th>
                                                <th width="50">Tara</th>
                                                <th width="50">Netto</th>
                                                <th width="100">Spesifikasi</th>
                                                <th>Tanggal</th>
                                                <th width="100">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = mysqli_query($koneksi, "select *,MID(time_stamp, 12, 8) AS pukul from ta_buah_keluar where time_stamp like '%$tahun%' and jenis2='brd' order by time_stamp desc");
                                            while ($data = mysqli_fetch_array($query)) :
                                            ?>
                                                <tr class="align-middle">
                                                    <td class="text-center"><?= $no++; ?></td>
                                                    <td><?= $data['pabrik_tujuan']; ?> <?= $data['pabrik_tujuan2']; ?> <br> <?= $data['alamat_pabrik']; ?></td>
                                                    <td><?= $data['nm_sopir']; ?> / Mobil dengan Nopol <b class="text-dark"><?= $data['plat']; ?></b></td>
                                                    <td class="text-center"><b class="text-dark"><?= rp($data['tbg_mobil_buah']); ?></b> Kg</td>
                                                    <td class="text-center"><b class="text-dark"><?= rp($data['tbg_kosong']); ?></b> Kg</td>
                                                    <td class="text-center"><b class="text-dark"><?= rp($data['tbg_buah']); ?></b> Kg</td>
                                                    <td class="">Berat Rata rata buah <b class="text-dark"><?= rp($data['berat_buah']); ?></b> & banyak janjang <b class="text-dark"><?= rp($data['rata_rata_buah']); ?></b></td>
                                                    <td><?= tgl_indo($data['tanggal']); ?> - <?= $data['pukul']; ?></td>
                                                    <td class="text-center">
                                                        <a href="form-update-buah-keluar?id=<?= $data['id'] ?>" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a>
                                                        <a href="" class="btn btn-outline-warning ml-2"><i class="fa fa-print"></i></a>
                                                        <a href="transaksi-keluar-brd?hal=hapus&id=<?= $data['id'] ?>" class="btn btn-outline-danger ml-2 bhapus<?= $data['id']; ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <script>
                                                    $('.bhapus<?= $data['id']; ?>').on('click', function(e) {
                                                        e.preventDefault();
                                                        const href = $(this).attr('href');
                                                        Swal.fire({
                                                            title: 'Perhatian !',
                                                            text: "Yanin ingin menghapus buah keluar dengan tujuan pabrik <?= $data['pabrik_tujuan'] ?> dengan berat <?= rp($data['tbg_buah']); ?> Kg?",
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