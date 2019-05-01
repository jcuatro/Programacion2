<?php
require "./../src/Conexion.php";
require "./../src/Usuario.php";
$user=new Usuario();
$user->conexion();
$resultado=$user->listarUsuario();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <select class="" name="nombre">
        <?php
        foreach ($resultado as $user ) {
          $nombre=$user["nombre"];
          echo "<option value='$nombre'>$nombre</option>";
        }
        ?>
      </select>
      <input type="submit" name="" value="ENTRAR">
    </form>
  </body>
</html>
