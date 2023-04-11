<?php

if (isset($_GET['id'])) {

    // Update

    if ($_GET['id'] == "welcome") {

        echo "<script>
        $(function() {
            // Toastr options
            toastr.options = {
                'closeButton': true,
                'debug': true,
                'newestOnTop': true,
                'progressBar': true,
                'positionClass': 'toast-top-right',
                'preventDuplicates': false,
                'onclick': null,
                'showDuration': '300',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut'
            }
            toastr['success']('Selamat datang di aplikasi $nm_app $nm_user - $time_stamp', 'Welcome');



        });

    </script>";
    } else if ($_GET['id'] == "update-user-berhasil") {

        echo "<script>
    $(function() {
        // Toastr options
        toastr.options = {
            'closeButton': true,
            'debug': true,
            'newestOnTop': true,
            'progressBar': true,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'onclick': null,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        }
        toastr['info']('Update User $username Berhasil - $time_stamp', 'Notifikasi');



    });

</script>";
    } else if ($_GET['id'] == "logout") {

        echo "<script>
        $(function() {
            // Toastr options
            toastr.options = {
                'closeButton': true,
                'debug': true,
                'newestOnTop': true,
                'progressBar': true,
                'positionClass': 'toast-top-right',
                'preventDuplicates': false,
                'onclick': null,
                'showDuration': '300',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut'
            }
            toastr['info']('Terimakasih Sudah Menggunakan Aplikasi $nm_app - $time_stamp', 'Notifikasi');



        });

    </script>";
    } else if ($_GET['id'] == "gagal-login") {

        echo "<script>
    $(function() {
        // Toastr options
        toastr.options = {
            'closeButton': true,
            'debug': true,
            'newestOnTop': true,
            'progressBar': true,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'onclick': null,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        }
        toastr['error']('Username atau password salah ! - $time_stamp', 'Notifikasi');



    });

</script>";
    } else if ($_GET['id'] == "add-saldo-success") {

        echo "<script>
    $(function() {
        // Toastr options
        toastr.options = {
            'closeButton': true,
            'debug': true,
            'newestOnTop': true,
            'progressBar': true,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'onclick': null,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        }
        toastr['success']('$_GET[penyetor] Berhasil menambah Saldo Senilai $_GET[jumlah] - $time_stamp', 'Notifikasi');



    });

</script>";
    } else if ($_GET['id'] == "add-saldo-gagal") {

        echo "<script>
$(function() {
    // Toastr options
    toastr.options = {
        'closeButton': true,
        'debug': true,
        'newestOnTop': true,
        'progressBar': true,
        'positionClass': 'toast-top-right',
        'preventDuplicates': false,
        'onclick': null,
        'showDuration': '300',
        'hideDuration': '1000',
        'timeOut': '5000',
        'extendedTimeOut': '1000',
        'showEasing': 'swing',
        'hideEasing': 'linear',
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut'
    }
    toastr['error']('$_GET[penyetor] Gagal menambah Saldo Senilai $_GET[jumlah] - $time_stamp', 'Notifikasi');



});

</script>";
    } else if ($_GET['id'] == "hapus-success") {

        echo "<script>
$(function() {
// Toastr options
toastr.options = {
    'closeButton': true,
    'debug': true,
    'newestOnTop': true,
    'progressBar': true,
    'positionClass': 'toast-top-right',
    'preventDuplicates': false,
    'onclick': null,
    'showDuration': '300',
    'hideDuration': '1000',
    'timeOut': '5000',
    'extendedTimeOut': '1000',
    'showEasing': 'swing',
    'hideEasing': 'linear',
    'showMethod': 'fadeIn',
    'hideMethod': 'fadeOut'
}
toastr['success']('Berhasil menghapus Data - $time_stamp', 'Notifikasi');



});

</script>";
    } else if ($_GET['id'] == "clear-cache-success") {

        echo "<script>
$(function() {
// Toastr options
toastr.options = {
'closeButton': true,
'debug': true,
'newestOnTop': true,
'progressBar': true,
'positionClass': 'toast-top-right',
'preventDuplicates': false,
'onclick': null,
'showDuration': '300',
'hideDuration': '1000',
'timeOut': '5000',
'extendedTimeOut': '1000',
'showEasing': 'swing',
'hideEasing': 'linear',
'showMethod': 'fadeIn',
'hideMethod': 'fadeOut'
}
toastr['error']('Bersihkan Log Berhasil ! - $time_stamp', 'Notifikasi');



});

</script>";
    } else if ($_GET['id'] == "update-success") {

        echo "<script>
$(function() {
// Toastr options
toastr.options = {
'closeButton': true,
'debug': true,
'newestOnTop': true,
'progressBar': true,
'positionClass': 'toast-top-right',
'preventDuplicates': false,
'onclick': null,
'showDuration': '300',
'hideDuration': '1000',
'timeOut': '5000',
'extendedTimeOut': '1000',
'showEasing': 'swing',
'hideEasing': 'linear',
'showMethod': 'fadeIn',
'hideMethod': 'fadeOut'
}
toastr['success']('Update Data Berhasil ! - $time_stamp', 'Notifikasi');



});

</script>";
    } else if ($_GET['id'] == "add-transaksi-success") {

        echo "<script>
$(function() {
// Toastr options
toastr.options = {
'closeButton': true,
'debug': true,
'newestOnTop': true,
'progressBar': true,
'positionClass': 'toast-top-right',
'preventDuplicates': false,
'onclick': null,
'showDuration': '300',
'hideDuration': '1000',
'timeOut': '5000',
'extendedTimeOut': '1000',
'showEasing': 'swing',
'hideEasing': 'linear',
'showMethod': 'fadeIn',
'hideMethod': 'fadeOut'
}
toastr['success']('Tambah Transaksi $_GET[suplayer] Berhasil ! - $time_stamp', 'Notifikasi');
});
</script>";
    } else if ($_GET['id'] == "update-transaksi-success") {

        echo "<script>
$(function() {
// Toastr options
toastr.options = {
'closeButton': true,
'debug': true,
'newestOnTop': true,
'progressBar': true,
'positionClass': 'toast-top-right',
'preventDuplicates': false,
'onclick': null,
'showDuration': '300',
'hideDuration': '1000',
'timeOut': '5000',
'extendedTimeOut': '1000',
'showEasing': 'swing',
'hideEasing': 'linear',
'showMethod': 'fadeIn',
'hideMethod': 'fadeOut'
}
toastr['success']('Update Transaksi $_GET[suplayer] Berhasil ! - $time_stamp', 'Notifikasi');
});
</script>";
    } else if ($_GET['id'] == "add-agen-success") {

        echo "<script>
$(function() {
// Toastr options
toastr.options = {
'closeButton': true,
'debug': true,
'newestOnTop': true,
'progressBar': true,
'positionClass': 'toast-top-right',
'preventDuplicates': false,
'onclick': null,
'showDuration': '300',
'hideDuration': '1000',
'timeOut': '5000',
'extendedTimeOut': '1000',
'showEasing': 'swing',
'hideEasing': 'linear',
'showMethod': 'fadeIn',
'hideMethod': 'fadeOut'
}
toastr['success']('Tambah Suplayer Berhasil ! - $time_stamp', 'Notifikasi');
});
</script>";
    } else if ($_GET['id'] == "suplayer-ready") {

        echo "<script>
$(function() {
// Toastr options
toastr.options = {
'closeButton': true,
'debug': true,
'newestOnTop': true,
'progressBar': true,
'positionClass': 'toast-top-right',
'preventDuplicates': false,
'onclick': null,
'showDuration': '300',
'hideDuration': '1000',
'timeOut': '5000',
'extendedTimeOut': '1000',
'showEasing': 'swing',
'hideEasing': 'linear',
'showMethod': 'fadeIn',
'hideMethod': 'fadeOut'
}
toastr['error']('Suplayer dengan nama $_GET[nama] sudah ada ! - $time_stamp', 'Notifikasi');
});
</script>";
    } else if ($_GET['id'] == "update-suplayer-success") {

        echo "<script>
$(function() {
// Toastr options
toastr.options = {
'closeButton': true,
'debug': true,
'newestOnTop': true,
'progressBar': true,
'positionClass': 'toast-top-right',
'preventDuplicates': false,
'onclick': null,
'showDuration': '300',
'hideDuration': '1000',
'timeOut': '5000',
'extendedTimeOut': '1000',
'showEasing': 'swing',
'hideEasing': 'linear',
'showMethod': 'fadeIn',
'hideMethod': 'fadeOut'
}
toastr['success']('Update data suplayer $_GET[suplayer] berhasil ! - $time_stamp', 'Notifikasi');
});
</script>";
    }
}
