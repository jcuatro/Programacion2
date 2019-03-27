<?php
  $conexion = new mysqli("localhost", "root", "", "juegos");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      } else {
        $nombre=$_POST["Nombre"];
        $apellidos=$_POST["Apellidos"];
        $correo=$_POST["Correo"];
        $edad=$_POST["Edad"];
        $usuario=$_POST["Usuario"];
        $consulta="insert into usuarios (Nombre, Apellidos, Correo, Edad, Usuario )
                    values ('$nombre', '$apellidos', '$correo','$edad','$usuario')";
        $resultado=$conexion->query($consulta);
        if($resultado==false){
          echo $conexion->error;
        }
        else{
          echo "Correcta insercion";
        }
        $resultado = $conexion->query("select *
                                        from usuarios");
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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

  </body>
</html>
