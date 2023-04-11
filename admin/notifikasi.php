<li class="dropdown notification-list">
    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <i class="mdi mdi-bell noti-icon"></i>
        <span class="badge badge-pill badge-info noti-icon-badge">3</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <!-- item-->
        <h6 class="dropdown-item-text">
            Notifikasi (3)
        </h6>
        <div class="slimscroll notification-item-list">
            <!-- item-->
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "select * from log order by time_stamp desc limit 3");
            while ($data = mysqli_fetch_array($query)) :
            ?>
                <a href="index" class="dropdown-item notify-item active">
                    <div class="notify-icon bg-success"><i class="fa fa-user"></i></div>
                    <p class="notify-details"><?= $data['username'] ?><span class="text-muted"><?= $data['pesan']; ?> <?= $data['time_stamp']; ?></span></p>
                </a>
            <?php endwhile; ?>
        </div>
        <!-- All-->
        <a href="index" class="dropdown-item text-center text-primary">
            Lihat Semua <i class="fi-arrow-right"></i>
        </a>
    </div>
</li>