<?php
error_reporting(0);
include '../system/config/koneksi.php';
if (isset($_POST['submit'])) {
  $user = mysqli_real_escape_string($conn, $_POST['user']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  $pass_confirm = mysqli_real_escape_string($conn, $_POST['pass_confirm']);
  if ($pass == $pass_confirm) {
    $data_nasabah = mysqli_query(
      $conn,
      "SELECT * FROM nasabah WHERE email = '$user'"
    );
    $cekdata = mysqli_num_rows($data_nasabah);
    if ($cekdata > 0) {
      $query = "UPDATE admin SET password = '$pass' WHERE email='$user'";
      $queryact = mysqli_query($conn, $query);
      header("Location: login.php");
    } else {
      echo "
          <script>
            alert('Email tidak ditemukan!');
            document.location.href ='lupapassword.php';
          </script>
          ";
    }
  }else{
    echo "
          <script>
            alert('Password tidak sama!');
            document.location.href ='lupapassword.php';
          </script>
          ";
  }
}
