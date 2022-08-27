<?php
require '../system/config/koneksi.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Contrail+One|Raleway" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel="shortcut icon" href="../asset/internal/img/img-local/favicon2.png">
    <link rel="stylesheet" href="../asset/internal/css/style-index1.css">
    <link rel="stylesheet" href="../asset/internal/css/style-index2.css">

    <script src="../asset/internal/js/preloader.js" type="text/javascript"></script>
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
        <a href="#" id=""></a>
        <nav>
            <a href="#" id="menu-icon"></a>
            <ul id="top-menu">
                <li style="list-style: none; display: inline"></li>
                <li class="active">
                    <a href="../index.php">Beranda</a>
                </li>
                <li style="list-style: none; display: inline"></li>
                <li>
                    <a href="artikel.php">Artikel</a>
                </li>
                <li style="list-style: none; display: inline"></li>
                <li>
                    <a href="tentang.php">Tentang Kami</a>
                </li>
                <li style="list-style: none; display: inline"></li>
                <li>
                    <a href="lokasi.php">Lokasi</a>
                </li>
                <li style="list-style: none; display: inline"></li>
            </ul>
        </nav>
    </header>


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="asset/internal/js/index.js"></script>

    <!--konten maps-->

    <br>
    <div id="bar">
        <div class="container">
        <div class="row mgt50px">
            <h1 align="center">Lokasi Bank Sampah</h1>
            <br>
            <br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m13!1m11!1m3!1d757.6565509920064!2d106.9712354005596!3d-6.302812179318225!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1508568321004"
                width="100%" height="470" frameborder="0" style="margin-bottom: 0; left: 10px;"
                allowfullscreen></iframe>
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
                <a href="artikel.php">Artikel</a>
                ·
                <a href="tentang.php">Tentang Kami</a>
                ·
                <a href="lokasi.php">Lokasi</a>
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