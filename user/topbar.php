<div class="topbar-main">
    <div class="container-fluid">
        <!-- Logo container-->
        <div class="logo">

            <a href="index" class="logo">
                <img src="<?= $base_url ?>/logo.png" height="50" alt="" class="logo-small">
                <img src="<?= $base_url ?>/logo.png" height="50" alt="" style="width:30px;height:30px;" class="logo-large">
                <b class="text-dark" style="font-size:20px;"><?= $nm_ramp; ?></b>
            </a>

        </div>

        <!-- End Logo container-->


        <div class="menu-extras topbar-custom">

            <ul class="navbar-right d-flex list-inline float-right mb-0">
                <li class="dropdown notification-list d-none d-sm-block">
                    <form role="search" class="app-search">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control text-center" value="<?= $time_stamp ?>">
                        </div>
                    </form>
                </li>

                <?php include('notifikasi.php'); ?>
                <li class="dropdown notification-list">
                    <div class="dropdown notification-list">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?= $base_url ?>/assets/user.png" alt="user" style="width:30px;height:30px;" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalUpdateUser"><i class="mdi mdi-account-circle m-r-5"></i> Profil</a>
                            <a class="dropdown-item d-block" href="<?= $base_url ?>/"><span class="badge badge-success float-right">1</span><i class="mdi mdi-settings m-r-5"></i> Pengaturan</a>
                            <a class="dropdown-item text-danger" href="<?= $base_url ?>/logout"><i class="mdi mdi-power text-danger"></i> Logout</a>
                        </div>
                    </div>
                </li>

                <li class="menu-item list-inline-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

            </ul>



        </div>
        <!-- end menu-extras -->

        <div class="clearfix"></div>

    </div> <!-- end container -->
</div>