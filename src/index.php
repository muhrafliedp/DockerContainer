<?php
error_reporting(0);
session_start();
if(isset($_POST['login'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if ($user == 'muhrafliedp' AND $pass == '123'){
    // membuat session
    session_start();
    $_SESSION['berhasil'] = true;
    header("Location: admin.php");
  } else {
    $salah = "<p style='color:red; text-align: center;'>username atau password tidak sesuai</p>";
  }
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>

  <body>
    <div class="container">
      <div class="formlogin">
        <h1 style='text-align: center'>Login</h1>
        <?php echo $salah; ?>
        <form action="" method="post">
          <label>Username</label><br />
          <input type="text" placeholder="username" name="username"/><br />
          <label>Password</label><br />
          <input type="password" placeholder="password" name="password"/><br />
          <button type="submit" name="login">Log in</button>
        </form>

      </div>
    </div>
  </body>
</html>
