<?php ob_start();
session_start();
?>
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
            padding: 10px;
            font-weight: 300;
        }
    </style>

</head>

<body>

    <h1 align="center">DATA PENYETORAN SAMPAH</h1>
    <table align="center" cellspacing='0'>
        <thead>
            <tr>
                <th>NO</th>
                <th>TANGGAL TARIK</th>
                <th>SALDO</th>
                <th>JUMLAH TARIK</th>
                <th>NIA</th>
            </tr>
        </thead>


        <?php
// Load file koneksi.php
require_once '../config/koneksi.php';

$query = mysqli_query(
    $conn,
    "SELECT * FROM tarik WHERE nin='" .
        @$_SESSION['nin'] .
        "' ORDER BY id_tarik DESC"
);

$no = 0;
while ($row = mysqli_fetch_array($query)) {
    $no++; ?>
        <tbody>
            <tr>
                <td><?php echo "$no"; ?>
                </td>
                <td><?php echo $row['tanggal_tarik']; ?>
                </td>
                <td>
                    <?php
                      $saldonya = mysqli_query($conn, "SELECT SUM(total) AS totalsaldo FROM setor WHERE nin='".$_SESSION['nin']."'");

    $tariknya = mysqli_query($conn, "SELECT SUM(jumlah_tarik) AS totaltarik FROM tarik WHERE nin='".$_SESSION['nin']."'");

    $var_saldo = mysqli_fetch_array($saldonya);
    $var_tarik = mysqli_fetch_array($tariknya);
    $tot_saldo_total=($var_saldo['totalsaldo'])-($var_tarik['totaltarik']); ?>
                    <?php echo "Rp. ".number_format($tot_saldo_total, 2, ",", ".")  ?>
                </td>
                <td><?php echo 'Rp. ' .
                number_format($row['jumlah_tarik'], 2, ',', '.'); ?>
                </td>
                <td><?php echo $row['nia']; ?>
                </td>
            </tr>
        </tbody>

        <?php
}
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
$filename = 'Histori-Tarik-(' . date('d-m-Y') . ').pdf';
$pdf->Output("$filename", 'D');
