<?php
require 'system/config/koneksi.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Contrail+One|Raleway" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel="shortcut icon" href="asset/internal/img/img-local/favicon.ico">
    <link rel="stylesheet" href="asset/internal/css/style-index1.css">
    <link rel="stylesheet" href="asset/internal/css/style-index2.css">

    <script src="asset/internal/js/preloader.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $(".preloader").fadeOut();
    })
    </script>

</head>

<body>

    <!--Pre Loader-->
    <div class="preloader">
        <div class="loading">
            <img src="asset/internal/img/img-local/spiner.gif" width="80">
        </div>
    </div>


    <!--Navbar-->
    <header>
        <a href="#" id="logo"></a>
        <nav>
            <a href="#" id="menu-icon"></a>
            <ul id="top-menu">
                <li style="list-style: none; display: inline"></li>
                <li class="active">
                    <a href="#">Beranda</a>
                </li>
                <li style="list-style: none; display: inline"></li>
                <li>
                    <a href="page/artikel.php">Artikel</a>
                </li>
                <li style="list-style: none; display: inline"></li>
                <li>
                    <a href="page/tentang.php">Tentang Kami</a>
                </li>
                <li style="list-style: none; display: inline"></li>
                <li>
                    <a href="page/lokasi.php">Lokasi</a>
                </li>
                <li style="list-style: none; display: inline"></li>
            </ul>
        </nav>
    </header>

    <!-- konten1 -->
    <div class="page-wrap">
        <div class="header" style="background: black;">
            <div class="box-1">
                <h1 disabled>Bank Sampah Kenanga 09</h1>
                <p> Merubah sampah menjadi penghasilan tambahan Anda !!! </p>
                <br> <br>

                <div class="center">
                    <a href="page/login.php" target="_blank">
                        <div class="btn" align="center">Login</div>
                    </a> <!-- End Btn -->

                    <a href="page/registrasi.php" target="_blank">
                        <div id="btn2" align="center">Register</div>
                    </a> <!-- End Btn2 -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--footer-->
    <footer class="footer-distributed">

        <div class="footer-left">

            <a href="#" id="logo_f"></a>
            <br>

            <p class="footer-links">
            <ul>
                <a href="../index.php">Beranda</a>
                ·
                <a href="page/artikel.php">Artikel</a>
                ·
                <a href="page/tentang.php">Tentang Kami</a>
                ·
                <a href="page/lokasi.php">Lokasi</a>
                </p>

                <p class="footer-company-name">&copy; Bank Sampah Kenanga 09 2017</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Perum. Pondok Gede Permai</span> Jatirasa, Jatiasih, Kota Bekasi.</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p><a href="sms:(+62)85694519585">(+62)856 9451 9585</a></p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:Official_bsk09@gmail.com">Official_BSK09@gmail.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>Kunjungi Sosial Media Kami!</span>
                Untuk yang ingin lebih dekat dan ingin lebih dekat dengan Bank Sampah Kenanga 09, silahkan kunjungi
                sosial media kami dibawah ini!
            </p>

            <div class="footer-icons">

                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>

            </div>

        </div>

    </footer>

</body>

</html>