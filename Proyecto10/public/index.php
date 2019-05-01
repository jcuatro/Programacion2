<?php
session_start();
$_SESSION["nombre"]=$_POST["nombre"];
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/user.css">
  </head>
  <body>
    <!-- Menu navegacion-->
    <?php include "./assets/navSup.php"; ?>
  </body>
</html>
