<?php
require_once '../config/koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM sampah WHERE id = '$id'";
$queryact = mysqli_query($conn, $query);
echo "<meta http-equiv='refresh'
              content='0; url=http://localhost/bsk09/banksampah/page/admin.php?page=data-sampah'>";
?>