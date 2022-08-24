<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="../asset/internal/css/style_1.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway:700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../asset/internal/img/img-local/favicon2.png">
</head>

<body>
  <div class="loginBox">
    <h1>Reset Password</h1>
    <form action="lupa_password.php" method="post">
      <div class="inputBox">
        <input type="text" name="user" autocomplete="off" placeholder="Masukan nomor induk">
        <span><i class="fa fa-user" aria-hidden="true"></i></span>
      </div>
      <div class="inputBox">
        <input type="password" name="pass" autocomplete="off" placeholder="Masukan password">
        <span><i class="fa fa-lock" aria-hidden="true"></i></span>
      </div>
      <div class="inputBox">
        <input type="password" name="pass_confirm" autocomplete="off" placeholder="Masukan Confirmasi password">
        <span><i class="fa fa-lock" aria-hidden="true"></i></span>
      </div>
      <input type="submit" name="submit" value="submit">
      <!-- <input type="submit" name="lupa_password" value="Lupa Password"> -->
    </form>
  </div>
</body>

</html>