<?php
  require "./../src/Equipo.php";

  $equipo = new Equipo();
  $error=$equipo->comprobarCampos($_POST);

  if (isset($error)) {
    if ($error==false) {
      $equipo->conectar();
      $equipo->insertarEquipo($_POST);
    }
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuevo Equipo</title>
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
    <h2>Nuevo Equipo</h2>
    <form class="formNBA" action="nuevoEquipo.php" method="post">
      <div class="grupoFormItem">
        <label for="Nombre"></label>
        <span class="formLabel">nombre </span>
        <input type="text" name="Nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Ciudad"></label>
        <span class="formLabel">ciudad </span>
        <input type="text" name="Ciudad" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Conferencia"></label>
        <span class="formLabel">conferencia </span>
        <input type="text" name="Conferencia" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Division"></label>
        <span class="formLabel">division </span>
        <input type="text" name="Division" value="">
      </div>
      <input type="submit" name="" value="insertar">
    </form>
<?php include "./assets/footer.php"; ?>
  </body>
</html>
