<?php
  require "./../src/Equipo.php";
  $equipo = new Equipo();
  $equipo->conectar();
  $resultado=$equipo->listarE();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista jugadores</title>
    <link rel="stylesheet" href="./css/nba.css">
  </head>
  <body>
    <!-- Menú de navegación. -->
    <?php include "assets/navSup.php"; ?>
    <!-- Error. -->
    <?php if (isset($error)) {
      echo "$error";
    } ?>
    <h1>Lista equipos</h1>
    <table>
      <tr>
        <td></td>
        <td>Nombre</td>
        <td>Ciudad</td>
        <td>Confernecia</td>
        <td>División</td>
      </tr>
    <?php
    foreach ($resultado as $equipo) {
      echo "<tr>";
           echo "<td>".$equipo['Nombre']."</td>";
           echo "<td>".$equipo['Ciudad']."</td>";
           echo "<td>".$equipo['Conferencia']."</td>";
           echo "<td>".$equipo['Division']."</td>";
      echo "</tr>";
    }
    ?>

  </table>
  <?php include "./assets/footer.php"; ?>
  </body>
</html>
