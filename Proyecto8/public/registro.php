<?php
  require "./../src/Usuario.php";

  $usuario = new Usuario();
  $error=$usuario->comprobarCampos($_POST);

  if (isset($error)) {
    if ($error==false) {
      $usuario->conectar();
      $usuario->insertarUsuario();
    }
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuevo jugador</title>
    <link rel="stylesheet" href="./css/user.css">
    <link rel="stylesheet" href="./css/microrobots.css">
  </head>
  <body>
    <!-- Menú de navegación. -->
    <?php include "./assets/navSup.php"; ?>
    <!-- Error. -->
    <?php
    if (isset($error)) {
       if($error!="") echo "<h4>ERROR:$error</h4>";
    } ?>

    <!-- Formulario de insercion -->
    <h2>Nuevo Usuario</h2>
    <form class="formJuegos" action="registro.php" method="post">
      <div class="grupoFormItem">
        <label for="nombre"></label>
        <span class="formLabel">Nombre </span>
        <input type="text" name="nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="apellidos"></label>
        <span class="formLabel">Apellidos </span>
        <input type="text" name="apellidos" value="">
      </div>
      <div class="grupoFormItem">
        <label for="edad"></label>
        <span class="formLabel">Edad </span>
        <input type="text" name="edad" value="">
      </div>
      <div class="grupoFormItem">
        <label for="correo"></label>
        <span class="formLabel">Correo </span>
        <input type="text" name="correo" value="">
      </div>
      <div class="grupoFormItem">
        <label for="usuario"></label>
        <span class="formLabel">Usuario </span>
        <input type="text" name="usuario" value="">
      </div>
      <input type="submit" name="" value="insertar">
    </form>
    <?php include "./assets/footer.php"; ?>
  </body>
</html>
