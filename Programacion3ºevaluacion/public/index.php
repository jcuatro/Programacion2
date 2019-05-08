<?php
require "../src/Conexion.php";
require "../src/Proyecto.php";

$proyecto=new Proyecto();
$proyecto->conectar();
$resultado=$proyecto->listarProyectos();

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>REGISTRO DE TRABAJADOR</h2>
    <form  action="registro.php" method="post">
      <br>Nombre<br>
      <input type="text" name="nombre" id="nombre" value="">
      <br>Apellidos<br>
      <input type="text" name="apellidos" id="apellidos" value="">
      <br>Precio_hora<br>
      <input type="text" name="precio" id="precio" value="">
      <br>Proyectos<br>
      <select class="" name="proyecto" id="proyecto">
        <?php
          foreach ($resultado as $proyecto) {
            $id=$proyecto["id"];
            $nombre=$proyecto["nombre"];
            echo "<option value='$id'>$nombre</option>";
          }
        ?>
      </select>
      <br><br>
      <input type="submit" name="" value="REGISTRAR">
    </form>
  </body>
  <script type="text/javascript" src="./js/comprobar.js">
  </script>
</html>
