<?php
require "./../src/usuario.php";
$jugador = new Usuario();
$jugador->conectar();
$resultado=$jugador->listarUsuario();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
      foreach ($resultado as $user) {
        echo "<tr>";
        echo "<td><a href=index.php?usuario=".$user['Nombre'].">".$user['Nombre']."</td>";
        echo "<td>".$user['Apellidos']."</td>";
        echo "<td>".$user['Correo']."</td>";
        echo "<td>".$user['Edad']."</td>";
        echo "<td>".$user['Usuario']."</td>";
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
