<?php
  $conexion = new mysqli("localhost", "root", "", "liga");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      } else {
        $equipo=$_GET['equipo'];
        $resultado = $conexion->query("select *
                                        from equipo
                                        where id_equipo=$equipo");
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Equipos</h2>
    <section>
      <article>
          <table border="1" width="70%">
            <br>
            <th>ID Equipo</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Web</th>
            <th>puntos</th>

            <?php
                  foreach ($resultado as $partido) {
                  echo "<tr>";
                  echo "<td><a href=jugadores.php?equipo=".$partido['id_equipo'].">".$partido['id_equipo']."</td>";
                  echo "<td>".$partido['nombre']."</td>";
                  echo "<td>".$partido['ciudad']."</td>";
                  echo "<td>".$partido['web']."</td>";
                  echo "<td>".$partido['puntos']."</td>";
                  echo "</tr>";
                }
             ?>
          </table>
        <article>
      </section>
  </body>
</html>
