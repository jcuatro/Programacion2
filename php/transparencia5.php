<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $Programacion="Programacion";
      $ProgramacionN=10;
      $Sistemas="Sistemas";
      $SistemasN=8;
      $Ingles="Ingles";
      $InglesN=9;
      $Fol="Fol";
      $FolN=3;
      $Basesdedatos="Basesdedatos";
      $BasesdedatosN=7;
      $Entornos="Entornos";
      $EntornosN=5;
      $Leguajesdemarcas="Lenguajesdemarcas";
      $LeguajesdemarcasN=9;

      echo "<table border=1.5>";
        echo "<tr>";
          echo "<td>$Programacion</td>";
          echo "<td>$Sistemas</td>";
          echo "<td>$Ingles</td>";
          echo "<td>$Fol</td>";
          echo "<td>$Basesdedatos</td>";
          echo "<td>$Entornos</td>";
          echo "<td>$Leguajesdemarcas</td>";
        echo "</tr>";

        color($ProgramacionN);
        color($SistemasN);
        color($InglesN);
        color($FolN);
        color($BasesdedatosN);
        color($EntornosN);
        color($LeguajesdemarcasN);
        function color($nota){
            if($nota<4) {
              echo "<td style='background-color:red'>$nota</td>";
            }
            else if (($nota>3)&&($nota<8)){
             echo "<td style='background-color:yellow'>$nota</td>";     }
            else {
              echo "<td style='background-color:green'>$nota</td>";
            }
          }
      echo "</table>"
     ?>
  </body>
</html>
