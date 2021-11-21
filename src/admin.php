<?php
session_start();

if (!$_SESSION['berhasil']){
    header("Location: index.php");
    die();
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <h1>Selamat Datang Admin Raflie</h1>
    </body>
</html>