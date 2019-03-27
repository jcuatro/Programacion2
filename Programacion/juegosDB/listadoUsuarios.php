<?php
  $conexion = new mysqli("localhost", "root", "", "juegos");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      } else {
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $correo=$_POST["correo"];
        $edad=$_POST["edad"];
        $usuario=$_POST["usuario"];
        $consulta="insert into usuarios (nombre, apellidos, correo, edad, usuario )
                    values ('$nombre', '$apellidos', '$correo', '$edad', '$usuario')";
        $resultado=$conexion->query($consulta);
        if($resultado==false){
          echo $conexion->error;
        }
        else{
          echo "Correcta insercion";
        }
        $resultado = $conexion->query("select *
                                        from usuarios ");
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
      <th>EMAIL</th>
      <th>EDAD</th>
      <th>USUARIO</th>

      <?php
      foreach ($resultado as $user) {
        echo "<tr>";
        echo "<td><a href=index.php?usuario=".$user['nombre'].">".$user['nombre']."</td>";
        echo "<td>".$user['apellidos']."</td>";
        echo "<td>".$user['correo']."</td>";
        echo "<td>".$user['edad']."</td>";
        echo "<td>".$user['usuario']."</td>";
        echo "</tr>";
      }
       ?>

    </table>
  </body>
</html>
