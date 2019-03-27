<?php
  require "./../src/Jugador.php";
  $jugador = new Jugador();
  $jugador->conectar();
  $resultado=$jugador->listar();
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
    <h1>Lista jugadores</h1>
    <table>
      <tr>
        <td>Código</td>
        <td>Nombre</td>
        <td>Procedencia</td>
        <td>Altura</td>
        <td>Peso</td>
        <td>Posición</td>
        <td>Equipo</td>
      </tr>
    <?php
    foreach ($resultado as $jugador) {
      echo "<tr>";
           echo "<td>".$jugador['codigo']."</td>";
           echo "<td>".$jugador['Nombre']."</td>";
           echo "<td>".$jugador['Procedencia']."</td>";
           echo "<td>".$jugador['Altura']."</td>";
           echo "<td>".$jugador['Peso']."</td>";
           echo "<td>".$jugador['Posicion']."</td>";
           echo "<td>".$jugador['Nombre_equipo']."</td>";
      echo "</tr>";
    }
    ?>

  </table>
  <?php include "./assets/footer.php"; ?>
  </body>
</html>
