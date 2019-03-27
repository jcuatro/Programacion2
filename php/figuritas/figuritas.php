<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figuritas</title>
  </head>
  <body>
    <div>
      <h4>Figurilla 1</h4>
      <?php
      $i=0;
      $j=0;
      $k=0;
      while ($i <= 3) {
        echo "*"."<p>";
        $i++;
      }
      ?>
    </div>
    <div>
      <h4>Figurilla 2</h4>
      <?php
      for ($i=1; $i <= 5; $i++) {
        for ($j=1; $j <= 5; $j++) {
          echo "* ";
        }
        echo "<p>";
      }
      ?>
    </div>
    <div>
      <h4>Figurilla 3</h4>
      <?php
      for ($i=1; $i <= 7; $i++) {
        for ($j=1; $j <= $i; $j++) {
          echo "* ";
        }
        echo "<p>";
      }
      ?>
    </div>
    <div>
      <h4>Figurilla 4: No me sale bien</h4>
      <?php
      for ($i=0; $i <= 2; $i++) {
        echo "* ";
        for ($j=1; $j <= ($i*2); $j++) {
          echo "* ";
        }
        echo "<p>";
      }
      ?>
      <?php
      function figura4($j,$k){
        for ($i=0; $i < $j; $i++) {
          echo "* ";
        }
        echo "<p>";
        if($k<2) figura4($i+2,$k+1);
        else if ($k==2) echo "* * * * * "."<p>";
        for ($i=0; $i < $j; $i++) {
          echo "* ";
        }
        echo "<p>";
      }
      figura4(1,1);
      ?>
    </div>
    <div>
      <h4>Figurilla 5</h4>
      <?php
      $k=5;
      for ($i=1; $i <= $k; $i++) {
        for ($j=1; $j <= ($k-$i); $j++) {
          echo "&nbsp&nbsp";
        }
        for ($j=1; $j < $i; $j++) {
          echo "*";
        }
        echo "*";
        for ($j=1; $j < $i; $j++) {
          echo "*";
        }
        for ($j=1; $j <= ($k-$i); $j++) {
          echo "&nbsp&nbsp;";
        }
        echo "<p>";
      }
      ?>
    </div>
  </body>
</html>
