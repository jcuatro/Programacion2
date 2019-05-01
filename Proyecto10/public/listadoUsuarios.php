<?php
require "./../src/Usuario.php";
require "./../src/Conexion.php";

$conexion = new Conexion();
$usuario = new Usuario();
$conexion->conexion();
$resultado=$usuario->listarUsuario();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/user.css">
  </head>
  <body>
    <?php
    include "assets/navSup.php"
     ?>
    <table border="1" width="70%">
      <br>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Correo</th>
      <th>Edad</th>
      <th>Usuario</th>
      <th>Puntuación</th>

      <?php
      foreach ($resultado as $usuario) {
        echo "<tr>";
        echo "<td><a href=microrobots.php?usuario=".$usuario['Nombre'].">".$usuario['Nombre']."</td>";
        echo "<td>".$usuario['Apellidos']."</td>";
        echo "<td>".$usuario['Correo']."</td>";
        echo "<td>".$usuario['Edad']."</td>";
        echo "<td>".$usuario['Usuario']."</td>";
        echo "<td>".$usuario['Puntuacion']."</td>";
        echo "</tr>";
      }
      // var_dump($_POST);
       ?>
    </table>
    <?php
    include "assets/footer.php"
     ?>
  </body>
</html>
