<?php
  require "./../src/usuario.php";

  $usuario = new Usuario();
  $error=$usuario->comprobarCampos($_POST);

  if (isset($error)) {
    if ($error==false) {
      $usuario->conectar();
      $usuario->insertarUsuario($_POST);
    }
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuevo jugador</title>
    <link rel="stylesheet" href="./css/user.css">
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
        <label for="Nombre"></label>
        <span class="formLabel">Nombre </span>
        <input type="text" name="Nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Apellidos"></label>
        <span class="formLabel">Apellidos </span>
        <input type="text" name="Apellidos" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Edad"></label>
        <span class="formLabel">Edad </span>
        <input type="text" name="Edad" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Correo"></label>
        <span class="formLabel">Correo </span>
        <input type="text" name="Correo" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Usuario"></label>
        <span class="formLabel">Usuario </span>
        <input type="text" name="Usuario" value="">
      </div>
      <input type="submit" name="" value="insertar"></input>
    </form>
    <?php include "./assets/footer.php"; ?>
  </body>
</html>
