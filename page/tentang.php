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

    <!--konten2-->
    <div id="foo">
        <section class="team">
            <div class="container">
                <div class="row">
                    <h1>TERTARIK BERGABUNG ???</h1>
                    <p>Bank sampah adalah organisasi peduli lingkungan yang berlokasi di perumahan Pondok
                        Gede Permai RW.009 kelurahan Jatirasa kecamatan Jatiasih Kota Bekasi. Selain bidang bank sampah
                        kami juga berfokus pada pengelolaan sampah, seperti komposting berbasis sampah, kerajinan
                        berbahan baku sampah, dan masih banyak lagi program yang kami kembangkan. Saat ini bank sampah
                        kenanga 09 melayani warga perumahan pondok gede permai RW.009 yang berjumlah lebih dari 100
                        kepala keluarga. Hal itu menunjukan bahwa warga masyarakat perumahan pondok gede permai sangat
                        antusias dengan adanya program ini, dan tentu bank sampah kenanga 09 mendapatkan perhatian
                        khusus dari warga sekitar. Jika Anda berminat untuk bergabung, silahkan ikuti langkah berikut
                        ini.</p>
                </div>
                <div class="row mgt50px">
                    <div class="coloumn">
                        <div class="imgBox">
                            <img src="../asset/internal/img/img-content/1.jpg">
                        </div>
                        <div class="details">
                            <h3>#Tahap1<br><span>Lakukan Pendaftaran</span></h3>
                        </div>
                    </div>
                    <div class="coloumn">
                        <div class="imgBox">
                            <img src="../asset/internal/img/img-content/2.jpg">
                        </div>
                        <div class="details">
                            <h3>#Tahap2<br><span>Pemilahan Sampah</span></h3>
                        </div>
                    </div>
                    <div class="coloumn">
                        <div class="imgBox">
                            <img src="../asset/internal/img/img-content/3.jpg">
                        </div>
                        <div class="details">
                            <h3>#Tahap3<br><span>Penimbangan Sampah</span></h3>
                        </div>
                    </div>
                    <div class="coloumn">
                        <div class="imgBox">
                            <img src="../asset/internal/img/img-content/4.jpg">
                        </div>
                        <div class="details">
                            <h3>#Tahap4<br><span>Mendapat Keuntungan</span></h3>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>
        </section>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="asset/internal/js/index.js"></script>


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

                <p class="footer-company-name">&copy; Bank Sampah</p>
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