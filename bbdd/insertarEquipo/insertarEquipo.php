<?php
$conexion = new mysqli("localhost", "root", "", "nba");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $Nombre=$_POST["Nombre"];
  $Ciudad=$_POST["Ciudad"];
  $Conferencia=$_POST["Conferencia"];
  $Division=$_POST["Division"];
  $consulta="insert into equipos (Nombre, Ciudad, Conferencia, Division)
              values ('$Nombre', '$Ciudad', '$Conferencia', '$Division')";
  $resultado=$conexion->query($consulta);
if ($resultado==false) {
  echo $conexion->error;
} else {
//  echo "Inserción correctilla";
 }
 $resultado = $conexion->query("select * from equipos");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1" width="90%">
      <br>
      <th>Nombre</th>
      <th>Ciudad</th>
      <th>Conferencia</th>
      <th>División</th>
<?php
foreach ($resultado as $equipos) {
  echo "<tr>";
       echo "<td>".$equipos['Nombre']."</td>";
       echo "<td>".$equipos['Ciudad']."</td>";
       echo "<td>".$equipos['Conferencia']."</td>";
       echo "<td>".$equipos['Division']."</td>";
       echo "</tr>";
     }
 ?>
</table>
  </body>
</html>
