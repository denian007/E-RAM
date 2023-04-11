<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('meta.php'); ?>
    <title><?= $nm_app; ?></title>
    <link rel="shortcut icon" href="<?= $base_url ?>/logo.png">
    <link href="<?= $base_url ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $base_url ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= $base_url ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="<?= $base_url ?>/assets/jquery-3.6.1.min.js"></script>
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
    <?php include('notif.php'); ?>
    <!-- Background -->
    <div class="account-pages"></div>
    <!-- Begin page -->
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="index" class="logo logo-admin"><img src="<?= $base_url ?>/logo.png" height="80" alt="logo">
                        <h3 class="text-primary">RAMP <?= $nm_ramp; ?></h3>
                    </a>
                </h3>
                <hr>
                <div class="p-0">

                    <form class="form-horizontal m-t-30" method="POST" action="cek_login.php">

                        <div class="form-group">
                            <label for="username">Username</label>
                            <select name="tahun" class="form-control text-muted" required oninvalid="this.setCustomValidity('Pilih Tahun')" oninput="setCustomValidity('')">
                                <option value="<?= date('Y') ?>">Pilih Tahun</option>
                                <option value="2023" class="text-dark">2023</option>
                                <option value="2024" class="text-dark">2024</option>
                                <option value="2025" class="text-dark">2025</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required oninvalid="this.setCustomValidity('Masukan Username')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password" required oninvalid="this.setCustomValidity('Masukan Password')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> Lupa password?</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p class="text-muted">Copyright © <a class="text-primary" href=""><?= $nm_app; ?></a> <?= date('Y'); ?> - All Right Reserved. <br> Developed by <a href="https://api.whatsapp.com/send?phone=6282360957575&text=Saya%20ingin%20menanyakan%20seputaran%20aplikasi%20E-RAM%20!" target="_blank" class="text-primary"> Deny Anugrah</a></p>
        </div>

    </div>

    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="<?= $base_url ?>/assets/js/jquery.min.js"></script>
    <script src="<?= $base_url ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>/assets/js/jquery.slimscroll.js"></script>
    <script src="<?= $base_url ?>/assets/js/waves.min.js"></script>

    <script src="<?= $base_url ?>/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- App js -->
    <script src="<?= $base_url ?>/assets/js/app.js"></script>

</body>

</html>