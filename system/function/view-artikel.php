<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
    <style>
    label {
        font-family: Montserrat;
        font-size: 18px;
        display: block;
        color: #262626;
    }
    </style>
</head>

<body>
    <h2 style="font-size: 30px; color: #262626;">Data Artikel</h2>
    <br>
    <table id="example" class="display" cellspacing="0" width="100%" border="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Artikel</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Artikel</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $no = 0;
            $query = mysqli_query(
                $conn,
                'SELECT * FROM artikel ORDER BY id_artikel ASC'
            );
            while ($row = mysqli_fetch_assoc($query)) {
                $no++; ?>
            <tr align="center">
                <td><?php echo "$no"; ?></td>
                <td><?php echo $row['nama_artikel']; ?></td>
                <td><img src="../asset/internal/img/art/<?php echo $row[
                    'gambar'
                ]; ?>" width="100px" height="50px"></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td>

                    <a href="admin.php?page=edit-artikel&id=<?php echo $row[
                        'id_artikel'
                    ]; ?>">
                        <button><i class="fa fa-pencil"></i>edit</button>
                    </a>

                    <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="../system/function/delete-artikel.php?id=<?php echo $row[
                        'id_artikel'
                    ]; ?>">
                        <button><i class="fa fa-trash-o"></i>hapus</button>
                    </a>

                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <br>

    <a href="admin.php?page=tambah-data-artikel">
        <button><i class="fa fa-plus" aria-hidden="true"></i>Tambah</button>
    </a>

    <a target="_blank" href="../system/function/print-artikel.php">
        <button><i class="fa fa-print" aria-hidden="true"></i>Cetak</button>
    </a>

    <script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
    <script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
</body>

</html>