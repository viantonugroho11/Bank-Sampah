<?php
error_reporting(0);
require_once '../system/config/koneksi.php';
if (isset($_POST['simpan'])) {
    $id = $_POST['id_setor'];
    $tanggal_setor = $_POST['tanggal_setor'];
    $jenis_sampah = $_POST['jenis_sampah'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $total = $_POST['total'];
    $query = mysqli_query(
        $conn,
        "UPDATE setor SET tanggal_setor='" .
            $tanggal_setor .
            "',jenis_sampah='" .
            $jenis_sampah .
            "',berat='" .
            $berat .
            "',harga='" .
            $harga .
            "',total='" .
            $total .
            "' WHERE id_setor='$id'"
    );
}
if ($query) {
    echo "
    <script>
      alert('Berhasil Merubah Data!');
    </script>
    ";
    echo "<script>location='admin.php?page=data-setor';</script>";
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

        select {
            border-radius: 5px;
            width: 42%;
            height: 39px;
            background: #eee;
            padding: 0 10px;
            box-shadow: 1px 2px 2px 1px #ccc;
            color: #262626;
        }

        input,
        select {
            font-family: Montserrat;
            font-size: 16px;
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
    <h2 style="font-size: 30px; color: #262626;">Edit Data Penyetoran</h2>
    <?php if (isset($_GET['id'])) {
        $id = $_GET['id']; ?>
    <?php
                                                                                                                        $cek = mysqli_query(
            $conn,
            "SELECT * FROM setor WHERE id_setor='" . $_GET['id'] . "'"
        );
        $row = mysqli_fetch_array($cek); ?>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label class="">Tanggal setor</label>
            <input type="text" id="date" name="tanggal_setor"
                value="<?php echo $row[
                                                                                                                                                                                                                                                'tanggal_setor'
                                                                                                                                                                                                                                            ]; ?> " />
            <script type="text/javascript">
                $('#date').datepick({
                    dateFormat: 'yyyy-mm-dd'
                });
            </script>
            <input type="hidden" name="id_setor"
                value="<?php echo $row['id_setor']; ?> " />
        </div>
        <div class="form-group">
            <label class="">Nomor Induk Admin</label>
            <input type="text" disabled="disabled" name="nia"
                value="<?php echo $row[
                                                                                                                                    'nia'
                                                                                                                                ]; ?>" />
        </div>
        <div class="form-group">
            <label class="">Nomor Induk Nasabah</label>
            <input type="text" name="nin" disabled="disabled"
                value="<?php echo $row[
                                                                                                                                    'nin'
                                                                                                                                ]; ?>" required />
        </div>
        <div class="form-group">
            <label class="">Jenis Sampah Sebelumnya</label>
            <input type="text" name="jenis_sampah" disabled
                value="<?php echo $row[
                                                                                                                                    'jenis_sampah'
                                                                                                                                ]; ?>" required />
        </div>
        <div class="form-group">
            <label class="">Jenis Sampah</label>
            <select class="jensampah" name="jenis_sampah" id="jenis_sampah" required onchange="changeValue(this.value)">
                <option value="pjs">---Pilih Jenis Sampah---</option>
                <?php
                                                                                                $query = mysqli_query($conn, 'SELECT * FROM sampah');
        $jsArray = "var dtsampah = new Array();\n";
        while ($row = mysqli_fetch_array($query)) {
            echo '<option value="' .
                                                                                                        $row['jenis_sampah'] .
                                                                                                        '">' .
                                                                                                        $row['jenis_sampah'] .
                                                                                                        '</option>';
            $jsArray .=
                                                                                                        "dtsampah['" .
                                                                                                        $row['jenis_sampah'] .
                                                                                                        "'] = {harga:'" .
                                                                                                        addslashes($row['harga']) .
                                                                                                        "'};\n";
        } ?>
            </select>
        </div>

        <div class="form-group">
            <label class="">Berat Sampah</label>
            <input type="text" required placeholder="Masukan berat sampah" id="berat" name="berat" onkeyup="sum();" />
        </div>

        <div class="form-group">
            <label class="">Harga Sampah (Rp)</label>
            <input type="text" placeholder="Otomatis terisi" style="cursor: not-allowed;" id="harga" name="harga" value="<?php echo $row[
                                                                                                'harga'
                                                                                            ]; ?>"
                onkeyup="sum();" readonly required />
        </div>

        <div class="form-group">
            <label class="">Total (Rp)</label>
            <input type="text" placeholder="Otomatis terisi" style="cursor: not-allowed;" id="total" name="total"
                readonly required />
        </div>

        <input name="id_setor" type="hidden"
            value="<?php echo $_GET['id']; ?>" />
        <input class="button" type="submit" name="simpan" value="Simpan Data" />


    </form>
    <?php
    } ?>
    <script type="text/javascript">
        <?php echo $jsArray; ?>

        function changeValue(jenis_sampah) {
            console.log(dtsampah);
            document.getElementById('harga').value = dtsampah[jenis_sampah]['harga'];
            sum();
        };

        function sum() {
            var txtFirstNumberValue = document.getElementById('berat').value;
            var txtSecondNumberValue = document.getElementById('harga').value;
            var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('total').value = result;
            }
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.nomoradmin').select2();
            $('.nomornasabah').select2();
            $('.jensampah').select2();
        });
    </script>
</body>

</html>