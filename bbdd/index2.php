<?php
  $conexion = new mysqli("localhost", "root", "", "liga");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      } else {
        $resultado = $conexion->query("insert into `equipo` (`id_equipo`,`nombre`,`ciudad`,`web`,`puntos`) values
                                        (7,'Levante U.D', 'Valencia', 'www.pornhub.com', 27)"
                                      );
    //    $resultado = $conexion->query("select * from equipo");
        $resultado = $conexion->query("select id_equipo, nombre, ciudad, web, puntos FROM equipo order by id_equipo Desc limit 1");
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="stiles.css">
  </head>
  <body>
      <article>
        <table border="1" width="70%">
          <br>
          <th>Id_equipo</th>
          <th>Nombre</th>
          <th>Ciudad</th>
          <th>Web</th>
          <th>Puntos</th>
          <?php
                foreach ($resultado as $equipo) {
                echo "<tr>";
                echo "<td>".$equipo['id_equipo']."</td>";
                echo "<td>".$equipo['nombre']."</td>";
                echo "<td>".$equipo['ciudad']."</td>";
                echo "<td>".$equipo['web']."</td>";
                echo "<td>".$equipo['puntos']."</td>";
                echo "</tr>";
              }
           ?>
        </table>
      <article>
    <script type="text/javascript" href="modernizr-custom.js"></script>
  </body>
</html>
