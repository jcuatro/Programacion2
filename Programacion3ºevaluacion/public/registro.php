<?php
require "../src/Conexion.php";
require "../src/Trabajador.php";

$trabajador=new Trabajador();
var_dump($_POST);
$error=$trabajador->comprobarCampos($_POST);
if($error){
  echo $error;
}else{
  $trabajador->conectar();
  $trabajador->insertarTrabajador();
}

?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
