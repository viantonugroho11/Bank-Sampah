<?php ob_start(); ?>
<html>

<head>
    <title>Cetak PDF</title>
    <link rel="shortcut icon" href="../../asset/internal/img/img-local/favicon.ico">

    <style>
    h1 {
        color: #262626;
    }

    table {
        max-width: 960px;
        margin: 10px auto;
    }

    thead th {
        font-weight: 400;
        background: #8a97a0;
    }

    tr {
        background: #f4f7f8;
        border-bottom: 1px solid #FFF;
        margin-bottom: 5px;
    }

    tr:nth-child(even) {
        background: #e8eeef;
    }

    th,
    td {
        text-align: center;
        padding: 15px 10px;
        font-weight: 300;
    }
    </style>
</head>

<body>

    <h1 align="center">LAPORAN DATA NASABAH</h1>
    <table align="center" cellspacing="0">
        <thead>
            <tr>
                <th>NIN</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TELEPON</th>
                <th>USERNAME</th>
                <th>SALDO</th>
            </tr>
        </thead>


        <?php
        // Load file koneksi.php
        require_once '../config/koneksi.php';

        $query = 'SELECT * FROM nasabah'; // Tampilkan semua data gambar
        $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

        while ($data = mysqli_fetch_array($sql)) { ?>
        <tbody>
            <tr>
                <td><?php echo $data['nin']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['telepon']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo 'Rp. ' .
                    number_format($data['saldo'], 2, ',', '.'); ?></td>
            </tr>
        </tbody>

        <?php }
        ?>

    </table>
</body>

</html>

<?php
$html = ob_get_contents();
ob_end_clean();

require_once '../../asset/plugin/html2pdf/autoload.php';
$pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');
$pdf->WriteHTML($html);
$filename = 'Data-Nasabah-(' . date('d-m-Y') . ').pdf';
$pdf->Output("$filename", 'D');


?>