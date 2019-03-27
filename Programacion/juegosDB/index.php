<?php
  $conexion = new mysqli("localhost", "root", "", "juegos");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      } else {
        $user=$_GET['usuario'];
        $resultado = $conexion->query("select usuario,puntuacion
                                        from usuarios
                                        where nombre='$user'");
      }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Micro Robots</title>
    <LINK href="microrobots.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <h1>Microrobots &nbsp &nbsp<button id="inicio" onclick="location.reload()"></button></h1>
    </header>
    <article>
      <div id="formulario">
        <?php
          foreach ($resultado as $usuario) {
              echo "<h2>".$usuario['usuario']."</h2>";
              echo '<h3>Puntos: '.$usuario['puntuacion'].'</h3>';
          }
          ?>

        <label for="fila1"><b>Introduce una fila:</b></label>
        <input type="text" id="fila1"/>
        <br><br>
        <label for="columna1"><b>Introduce una columna:</b></label>
        <input type="text" id="columna1"/>
        <p id="jugadas">Has realizado 0 movimientos</p>
        <p id="movimientos"></p>
        <p id="fallos"></p>
        <button onclick="menor()">Enviar</button>
      </div>
      <div id="dads">
        <div class="dados" id="dado2"></div>
        <div id="blanco"></div>
        <div class="dados" id="dado1"><b></b></div>
      </div>
      <div id = "boton">
        <button onclick="random()">Dados</button>
      </div>
      <script type="text/javascript" src="microrobots.js"></script>
    </article>
  </body>
</html>
