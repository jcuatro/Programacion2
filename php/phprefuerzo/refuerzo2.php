<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <div class="w3-card-4">
        <div class="w3-container">
          <h1>Transparencias</h1>
          <div class="w3-card" style="width:50%;">
            <header class="w3-container w3-pink">
              <h1>Menu navegación</h1>
            </header>
            <div class="w3-container w3-white">
              <p>
                <?php
                  $array=['Inicio','Blog','Videos','Contacto'];
                  for($i=count($array);$i>0;$i--){
                    echo "<ul></ul>";
                    echo '<li class="navegador">'.$array[($i)-1].'</li>';
                  }
                ?>
              </p>
            </div>
          </div>
    </header>
    </div>
  </body>
</html>
