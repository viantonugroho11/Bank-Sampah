<?php if (isset($_POST['simpan'])) {
    require_once '../system/config/koneksi.php';
    $nama_artikel = $_POST['nama_artikel'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = '../asset/internal/img/art/';
    $deskripsi = $_POST['deskripsi'];

    move_uploaded_file($source, $folder . $nama_file);

    $query = mysqli_query(
        $conn,
        "INSERT INTO artikel VALUES ('','$nama_artikel','$nama_file','$deskripsi')"
    );

    if ($query) {
        echo "
        <script>
          alert('Berhasil Menambah Data!');
        </script>
        ";

        echo "<script>location='admin.php?page=data-artikel';</script>";
    } else {
        echo "
        <script>
          alert('Gagal Menambah Data!');
        </script>
        ";

        echo "<script>location='admin.php?page=data-artikel';</script>";
    }
} ?>


<html>

<head>
    <title>Homepage</title>
    <!--link datatables-->
    <style>
    label {
        font-family: Montserrat;
        font-size: 18px;
        display: block;
        color: #262626;
    }

    input[type=text],
    input[type=password] {
        border-radius: 5px;
        width: 40%;
        height: 35px;
        background: #eee;
        padding: 0 10px;
        box-shadow: 1px 2px 2px 1px #ccc;
        color: #262626;
    }

    select {
        border-radius: 5px;
        width: 42%;
        height: 39px;
        background: #eee;
        padding: 0 10px;
        box-shadow: 1px 2px 2px 1px #ccc;
        color: #262626;
    }

    input[type=submit] {
        height: 35px;
        width: 200px;
        background: #8cd91a;
        border-radius: 20px;
        color: #fff;
        margin-top: 20px;
        cursor: pointer;
    }

    input,
    select {
        font-family: Montserrat;
        font-size: 16px;
    }

    .form-group {
        padding: 5px 0;
    }
    </style>

    <script type="text/javascript">
    function cek_data() {
        var x = daftar_user.nama_artikel.value;
        var x1 = parseInt(x);

        if (x == "") {
            alert("Maaf harap input nama artikel!");
            daftar_user.nama_artikel.focus();
            return false;
        }
        if (isNaN(x1) == false) {
            alert("Maaf nama artikel harus di input huruf!");
            daftar_user.nama_artikel.focus();
            return false;
        }

        if (daftar_user.gambar.value == "") {
            alert("Maaf harap input gambar!");
            daftar_user.gambar.focus();
            return false;
        }
        var x = daftar_user.deskripsi.value;
        var panjang = x.length;

        if (x == "") {
            alert("Maaf harap input deskripsi!");
            daftar_user.deskripsi.focus();
            return false;
        }
        if (panjang > 50) {
            alert("deskripsi di input maksimum 50 karakter!");
            daftar_user.deskripsi.focus();
            return false;
        } else {
            confirm("Apakah Anda yakin sudah input data dengan benar?");
        }
        return true;
    }
    </script>

</head>

<body>
    <h2 style="font-size: 30px; color: #262626;">Tambah Data Sampah</h2>

    <form id="daftar_user" action="" method="post" enctype="multipart/form-data" onsubmit="return cek_data()">
        <div class="form-group">
            <label class="text-left">Artikel</label>
            <input type="text" placeholder="Masukan nama artikel" name="nama_artikel" />
        </div>

        <div class="form-group">
            <label class="">Gambar</label>
            <input type="file" name="gambar" />
        </div>

        <div class="form-group">
            <label class="">Deskripsi</label>
            <textarea type="text" placeholder="Masukan deskripsi artikel" name="deskripsi"></textarea>
        </div>

        <input type="submit" name="simpan" value="Simpan"></input>
    </form>



</body>

</html>