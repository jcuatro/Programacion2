<?php
  $conexion = new mysqli("localhost", "root", "", "liga");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      } else {
        $equipo=$_GET['equipo'];
        $resultado = $conexion->query("select *
                                        from jugador join equipo
                                        on equipo=id_equipo
                                        where equipo=$equipo");
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Jugadores</h2>
    <section>
      <article>
          <table border="1" width="70%">
            <br>
            <th>ID Jugador</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Posicion</th>
            <th>ID Capitan</th>
            <th>Fecha Alta</th>
            <th>Salario</th>
            <th>Equipo</th>
            <th>Altura</th>
            <?php

                  foreach ($resultado as $jugador) {
                      echo "<tr>";
                      echo "<td>".$jugador['id_jugador']."</td>";
                      echo "<td>".$jugador['nombre']."</td>";
                      echo "<td>".$jugador['apellido']."</td>";
                      echo "<td>".$jugador['posicion']."</td>";
                      echo "<td>".$jugador['id_capitan']."</td>";
                      echo "<td>".$jugador['fecha_alta']."</td>";
                      echo "<td>".$jugador['salario']."</td>";
                      echo "<td>".$jugador['nombre']."</td>";
                      echo "<td>".$jugador['altura']."</td>";
                      echo "</tr>";
                }
             ?>
          </table>
        <article>
      </section>
  </body>
</html>
