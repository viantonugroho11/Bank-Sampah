<?php
error_reporting(E_ALL | E_STRICT);
require_once '../system/config/koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_artikel = $_POST['nama_artikel'];
    $id_artikel = $_POST['id_artikel'];
    $deskripsi = $_POST['deskripsi'];
    if (isset($_FILES['gambar']['tmp_name'])) {
        $nama_file = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $folder = '../asset/internal/img/art/';

        move_uploaded_file($source, $folder . $nama_file);
        $query = mysqli_query(
            $conn,
            "UPDATE artikel SET nama_artikel='" .
                $nama_artikel .
                "',gambar='" .
                $nama_file .
                "',deskripsi='" .
                $deskripsi .
                "' WHERE id_artikel='$id_artikel'"
        );
    } else {
        $query = mysqli_query(
            $conn,
            "UPDATE artikel SET nama_artikel='" .
                $nama_artikel .
                "',deskripsi='" .
                $deskripsi .
                "' WHERE id_artikel='$id_artikel'"
        );
    }
    if ($query) {
        echo "
        <script>
          alert('Berhasil Mengubah Data!');
        </script>
        ";

        echo "<script>location='admin.php?page=data-artikel';</script>";
    } else {
        echo "
        <script>
          alert('Gagal Mengubah Data!');
        </script>
        ";

        echo "<script>location='admin.php?page=data-artikel';</script>";
    }
}
?>

<html>

<head>

    <script type="text/javascript" src="../asset/plugin/datepicker/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../asset/plugin/datepicker/css/jquery.datepick.css">
    <script type="text/javascript" src="../asset/plugin/datepicker/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="../asset/plugin/datepicker/js/jquery.datepick.js"></script>


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

    input[type=submit] {
        height: 35px;
        width: 200px;
        background: #8cd91a;
        border-radius: 20px;
        color: #fff;
        margin-top: 20px;
        cursor: pointer;
    }

    input {
        font-family: Montserrat;
        font-size: 16px;
    }

    .form-group {
        padding: 5px 0;
    }
    </style>
</head>

<body>
    <h2 style="font-size: 30px; color: #262626;">Edit Data Artikel</h2>
    <?php if (isset($_GET['id'])) {
        $id_artikel = $_GET['id']; ?>
    <?php
    $cek = mysqli_query(
        $conn,
        "SELECT * FROM artikel WHERE id_artikel='" . $_GET['id'] . "'"
    );
    $row = mysqli_fetch_array($cek);
    ?>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label class="">Nama Artikel</label>
            <input type="text" name="nama_artikel" value="<?php echo $row[
                'nama_artikel'
            ]; ?> " />
            <input type="hidden" name="id_artikel" value="<?php echo $row['id_artikel']; ?> " />
        </div>
        <div class="form-group">
            <label class="">Gambar</label>
            <input type="file" name="gambar" value="<?php echo $row[
                'gambar'
            ]; ?>" />
        </div>
        <div class="form-group">
            <label class="">Deskripsi</label>
            <textarea type="text" name="deskripsi" value="<?php echo $row[
                'deskripsi'
            ]; ?>" required><?php echo $row['deskripsi']; ?></textarea>
        </div>



        <input name="id_artikel" type="hidden" value="<?php echo $_GET['id']; ?>" />
        <input class="button" type="submit" name="simpan" value="Simpan Data" />


    </form>

    <?php
    } ?>

</body>

</html>