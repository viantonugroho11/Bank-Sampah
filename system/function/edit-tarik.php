<?php
error_reporting(0);
require_once '../system/config/koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id_tarik'];
    $tanggal_tarik = $_POST['tanggal_tarik'];
    $jumlah_tarik = $_POST['jumlah_tarik'];
    $query = mysqli_query(
        $conn,
        "UPDATE tarik SET tanggal_tarik='" .
            $tanggal_tarik .
            "',jumlah_tarik='" .
            $jumlah_tarik .
            "' WHERE id_tarik='$id'"
    );
}
if ($query) {
    echo "
    <script>
      alert('Berhasil Merubah Data!');
    </script>
    ";
    echo "<script>location='admin.php?page=data-tarik';</script>";
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
    <h2 style="font-size: 30px; color: #262626;">Edit Data Transaksi Saldo</h2>
    <?php if (isset($_GET['id'])) {
        $id = $_GET['id']; ?>
    <?php
                                                                                                                                                                                                                                                                        $cek = mysqli_query(
            $conn,
            "SELECT * FROM tarik WHERE id_tarik='" . $_GET['id'] . "'"
        );
        $row = mysqli_fetch_array($cek); ?>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label class="">Tanggal Tarik</label>
            <input type="text" id="date" name="tanggal_tarik"
                value="<?php echo $row[
                                                                                                                                                                                                                'tanggal_tarik'
                                                                                                                                                                                                            ]; ?> " />
            <script type="text/javascript">
                $('#date').datepick({
                    dateFormat: 'yyyy-mm-dd'
                });
            </script>
            <input type="hidden" name="id_tarik"
                value="<?php echo $row['id_tarik']; ?> " />
        </div>
        <div class="form-group">
            <label class="text-left">Nomor Induk Nasabah</label>
            <input type="text" name="nin" disabled value="<?php echo $row[
                                                                            'nin'
                                                                        ]; ?>" />
        </div>
        <div class="form-group">
            <label class="">Saldo</label>
            <input type="text" name="saldo" disabled
                value="<?php echo $row[
                                                                                                                                                                                                                                                                                    'saldo'
                                                                                                                                                                                                                                                                                ]; ?>"
                required />
        </div>
        <div class="form-group">
            <label class="">Jumlah Tarik</label>
            <input type="text" name="jumlah_tarik" required
                value="<?php echo $row[
                                                                                                                                                                                                                                                                                    'jumlah_tarik'
                                                                                                                                                                                                                                                                                ]; ?>"
                required />
        </div>
        <div class="form-group">
            <label class="">Nia</label>
            <input type="text" disabled name="nia"
                value="<?php echo $row[
                                                                                                                                                                                                                                                                                    'nia'
                                                                                                                                                                                                                                                                                ]; ?>"
                required />
        </div>



        <input name="id_tarik" type="hidden"
            value="<?php echo $_GET['id']; ?>" />
        <input class="button" type="submit" name="simpan" value="Simpan Data" />


    </form>

    <?php
    } ?>

</body>

</html>