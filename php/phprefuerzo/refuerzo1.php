<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figuritas</title>
  </head>
  <body>
      <?php
      for ($i=1; $i <= 60 ; $i++) {
        if ($i%2 != 0 ) {
          echo "<ul></ul>";
          echo "<li>".$i."</li>";
        }
      }
       ?>
  </body>
</html>
