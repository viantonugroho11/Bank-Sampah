<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <link rel="stylesheet" href="../asset/internal/css/style_1.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway:700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../asset/internal/img/img-local/favicon.ico">
</head>
<style>
    select {
        border-radius: 5px;
        width: 100%;
        height: 25px;
        background: #eee;
        padding: 0 10px;
        box-shadow: 1px 2px 2px 1px #ccc;
        color: #262626;
    }
</style>

<body>
    <?php
    error_reporting(0);
    require_once '../system/config/koneksi.php';

    $no = mysqli_query($conn, 'SELECT nin FROM nasabah ORDER BY nin DESC');
    $nin = mysqli_fetch_array($no);
    $kode = $nin['nin'];

    $urut = substr($kode, 7, 3);
    $tambah = (int) $urut + 1;
    $bln = date('m');
    $thn = date('y');

    if (strlen($tambah) == 1) {
        $format = 'NSB' . $thn . $bln . '00' . $tambah;
    } elseif (strlen($tambah) == 2) {
        $format = 'NSB' . $thn . $bln . '0' . $tambah;
    } else {
        $format = 'NSB' . $thn . $bln . $tambah;
    }

    if (isset($_POST['simpan'])) {
        $nin = $_POST['nin'];
        $nama = $_POST['nama'];
        $rt = $_POST['rt'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $saldo = $_POST['saldo'];

        $sql = mysqli_query($conn, "SELECT * FROM nasabah WHERE nin = '$nin'");

        if (mysqli_fetch_array($sql) > 0) {
            echo "<script>
                alert('Maaf akun sudah terdaftar');
              </script>";

            echo "<script>location='page/login.php';</script>";

            return false;
        }

        mysqli_query(
            $conn,
            "INSERT INTO nasabah VALUES ('$nin','$nama','$rt','$alamat','$telepon','$email','$password','$saldo','$sampah')"
        );

        echo "<script>
                alert('Selamat berhasil registrasi!');
              </script>";

        echo "<script>location='login.php';</script>";
    }
    ?>
    <script type="text/javascript">
        function cek_data() {
            var x = daftar_user.nama.value;
            var x1 = parseInt(x);

            if (x == "") {
                alert("Maaf harap input nama nasabah!");
                daftar_user.nama.focus();
                return false;
            }
            if (isNaN(x1) == false) {
                alert("Maaf nama harus di input huruf!");
                daftar_user.nama.focus();
                return false;
            }
            var p = daftar_user.rt.value;
            if (p == "p") {
                alert("Maaf harap input rukun tetangga (RT)!");
                return (false);
            }
            var x = daftar_user.alamat.value;
            var x1 = parseInt(x);

            if (x == "") {
                alert("Maaf harap input alamat nasabah!");
                daftar_user.alamat.focus();
                return false;
            }
            var x = daftar_user.telepon.value;
            var angka = /^[0-9]+$/;

            if (x == "") {
                alert("Maaf harap input nomor telepon!");
                daftar_user.telepon.focus();
                return false;
            }
            if (!x.match(angka)) {
                alert("Maaf nomor telepon harus di input angka!");
                daftar_user.telepon.focus();
                return false;
            }
            if (x.length != 12) {
                alert("Nomor telepon harus 12 karakter!");
                daftar_user.telepon.focus();
                return false;
            }
            var x = daftar_user.email.value;
            var cek_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (x == "") {
                alert("Maaf harap input email!");
                daftar_user.email.focus();
                return false;
            }
            if (!x.match(cek_email)) {
                alert("Format penulisan email tidak sesuai!");
                daftar_user.email.focus();
                return false;
            }
            var x = daftar_user.password.value;
            var panjang = x.length;

            if (x == "") {
                alert("Maaf harap input password!");
                daftar_user.password.focus();
                return false;
            }
            if (panjang < 6 || panjang > 20) {
                alert("Password di input minimum 6 karakter dan maksimum 20 karakter!");
                daftar_user.password.focus();
                return false;
            } else {
                confirm("Apakah Anda yakin sudah input data dengan benar?");
            }
            return true;
        }
    </script>
    <div class="loginBox">
        <h1>DAFTAR DISINI</h1>
        <form action="" method="post">
            <div class="inputBox">
                <input style="cursor: not-allowed;" type="text" name="nin"
                    value="<?php echo $format; ?>" readonly />
            </div>
            <div class="inputBox">
                <input type="text" name="nama" autocomplete="off" placeholder="Masukan Nama">
                </input>
            </div>
            <div class="inputBox" style="margin-bottom: 10px;">
                <select name="rt">
                    <option value="p">---Pilih RT---</option>
                    <option value="1">RT01</option>
                    <option value="2">RT02</option>
                    <option value="3">RT03</option>
                    <option value="4">RT04</option>
                    <option value="5">RT05</option>
                    <option value="6">RT06</option>
                    <option value="7">RT07</option>
                    <option value="8">RT08</option>
                    <option value="9">RT09</option>
                </select>
            </div>
            <div class="inputBox">
                <input type="text" required name="alamat" autocomplete="off" placeholder="Masukan Alamat">
                </input>
            </div>
            <div class="inputBox">
                <input type="text" required name="telepon" autocomplete="off" placeholder="Masukan Nomor Telepon">
                </input>
            </div>
            <div class="inputBox">
                <input type="text" required name="email" autocomplete="off" placeholder="Masukan Email">
                </input>
            </div>
            <div class="inputBox">
                <input type="password" required name="password" autocomplete="off" placeholder="Masukan Password">
                </input>
            </div>
            <div class="inputBox">
                <input type="hidden" name="saldo" />
            </div>
            <input type="submit" name="simpan" value="simpan">
        </form>
    </div>
</body>

</html>