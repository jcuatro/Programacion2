<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura paises</title>
  </head>
  <body>
    <?php
    $conector = new mysqli("localhost",
    "root", "", "liga");
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
    }else{
      //Interaccion con la base de datos
      //Hacemos una consulta
      $resultado = $conector->query("SELECT * FROM equipo");
      foreach ($resultado as $fila) {
      ?>
        <div class="row">
            <?=$fila["nombre"]." ".$fila["ciudad"]." ".$fila["id_equipo"]?>
        </div>
      <?php
      }
    }
    ?>
  </body>
</html>
