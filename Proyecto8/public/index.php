<?php
require "./../src/usuario.php";
$jugador = new Usuario();
$jugador->conectar();
$resultado=$jugador->listarUsuario();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Micro Robots</title>
    <LINK href="microrobots.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php include "./assets/navSup.php"; ?>
    
      <h1>Microrobots &nbsp &nbsp<button id="inicio" onclick="location.reload()"></button></h1>
    <article>
      <div id="formulario">
        <?php
          foreach ($resultado as $usuario) {
              echo "<h2>".$usuario['nombre'].' '.$usuario['apellidos']."</h2>";
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
    <?php include "./assets/footer.php"; ?>
  </body>
</html>
