<?php
include('session.php');
include('read-transaksi-petani-brd.php');
//echo print_r($_SESSION);
if ($_SESSION['level'] == "") {
    header("location:../index?id=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../meta.php'); ?>
    <title>Transaksi Petani</title>
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

                        <h4 class="page-title">Transaksi Petani</h4>

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
                                        <a href="form-transasi-petani-brd?komoditas=brd" class="btn btn-outline-primary"> <i class="fa fa-plus"></i> Tambah Transaksi</a>
                                    </div>
                                </div>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr class="align-middle text-center bg-primary text-dark">
                                            <th width="5">No</th>
                                            <th>Nama Suplayer</th>
                                            <th>Bruto</th>
                                            <th>Tara</th>
                                            <th>Netto</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal</th>
                                            <th width="100">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "select *,MID(time_stamp, 12, 8) AS pukul from ta_transaksi where time_stamp like '%$tahun%' and jenis2='brd' and jenis like '%petani%' order by time_stamp desc");
                                        while ($data = mysqli_fetch_array($query)) :
                                        ?>
                                            <tr class="align-middle">
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td><?= $data['nm_suplayer']; ?></td>
                                                <td class="text-center"><?= rp($data['tbg_masuk']); ?></td>
                                                <td class="text-center"><?= rp($data['tbg_keluar'] + $data['ptg_kg']); ?></td>
                                                <td class="text-center"><?= rp($data['tbg_bersih']); ?></td>
                                                <td class="text-center">Rp. <?= rp($data['harga']); ?> ,-</td>
                                                <td class="text-center">Rp. <?= rp($data['jumlah']); ?> ,-</td>
                                                <td class="text-center"><?= tgl_indo($data['tanggal']); ?> - <?= $data['pukul']; ?></td>
                                                <td class="text-center">
                                                    <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalUpdatePetani<?= $data['id'] ?>"><i class="fa fa-edit"></i></a>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-outline-warning ml-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-print"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                            <a class="dropdown-item btn btn-warning" target="_blank" href="../cetak/cetak-<?= $data['jenis2'] ?>?x=<?= $data['id'] ?>">Cetak Android</a>
                                                            <a class="dropdown-item btn btn-primary" href="#">Cetak Komputer</a>
                                                        </div>
                                                    </div>
                                                    <a href="transaksi-petani-brd?hal=hapus&id=<?= $data['id'] ?>" class="btn btn-outline-danger ml-2 bhapus<?= $data['id']; ?>"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <script>
                                                $('.bhapus<?= $data['id']; ?>').on('click', function(e) {
                                                    e.preventDefault();
                                                    const href = $(this).attr('href');
                                                    Swal.fire({
                                                        title: 'Perhatian !',
                                                        text: "Apakah anda yakin ingin menghapus data faktur <?= $data['nm_suplayer'] ?>?",
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
                                            <?php include('modal-update-petani.php'); ?>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>

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