<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="siperu, sistem peminjaman ruang, uad" />
    <meta name="description" content="Layanan sistem peminjaman ruang berbasis website untuk mempermudah peminjaman ruang pada lingkup Universitas Ahmad Dahlan" />

    <title><?php echo $title ?></title>

    <!-- CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- JS -->
    <script src="./assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {

            window.addEventListener('scroll', function() {

                if (window.scrollY > 50) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // menambah padding top pada navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    // hapus padding top dari body
                    document.body.style.paddingTop = '0';
                }
            });
        });
    </script>

</head>