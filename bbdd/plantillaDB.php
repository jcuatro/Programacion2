<?php
$conector = new mysqli("localhost",
"root", "", "liga");
if ($conector->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
}else{
  //Interaccion con la base de datos
  echo "<h1>Equipos</h1>";
  $resultado = $conector->query("SELECT id_equipo,nombre FROM equipo GROUP
  BY ciudad");
?>
