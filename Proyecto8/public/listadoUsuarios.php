<?php
require "./../src/usuario.php";
$usuario = new Usuario();
$usuario->conectar();
$resultado=$usuario->listarUsuario();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/user.css">
    <link rel="stylesheet" href="./css/microrobots.css">
  </head>
  <body>
    <?php
    include "assets/navSup.php"
     ?>
    <table border="1" width="70%">
      <br>
      <th>NOMBRE</th>
      <th>APELLIDOS</th>
      <th>CORREO</th>
      <th>EDAD</th>
      <th>USUARIO</th>

      <?php
      foreach ($resultado as $usuario) {
        echo "<tr>";
        echo "<td><a href=microrobots.php?usuario=".$usuario['Nombre'].">".$usuario['Nombre']."</td>";
        echo "<td>".$usuario['Apellidos']."</td>";
        echo "<td>".$usuario['Correo']."</td>";
        echo "<td>".$usuario['Edad']."</td>";
        echo "<td>".$usuario['Usuario']."</td>";
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
