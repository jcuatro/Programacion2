<?php
  require "./../src/Jugador.php";

  $jugador = new Jugador();
  $error=$jugador->comprobarCampos($_POST);

  if (isset($error)) {
    if ($error==false) {
      $jugador->conectar();
      $jugador->insertarJugador();
    }
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuevo jugador</title>
    <link rel="stylesheet" href="./css/nba.css">
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
    <h2>Nuevo Jugador</h2>
    <form class="formNBA" action="nuevoJugador.php" method="post">
      <div class="grupoFormItem">
        <label for="codigo"></label>
        <span class="formLabel">codigo </span>
        <input type="text" name="codigo" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Nombre"></label>
        <span class="formLabel">nombre </span>
        <input type="text" name="Nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Peso"></label>
        <span class="formLabel">peso </span>
        <input type="text" name="Peso" value="">
      </div>
      <input type="submit" name="" value="insertar">
    </form>
    <?php include "./assets/footer.php"; ?>
  </body>
</html>
