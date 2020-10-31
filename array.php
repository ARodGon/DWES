<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array1</title>
  </head>
  <body>
    <?php
    $coches = array("Volvo", "BMW", "Toyota");
    $arrLong = count($coches);
    echo "$arrLong <br>";

    for($x = 0; $x < $arrLong; $x++) {
      echo $coches[$x];
      echo "<br>";
    }

    ?>
  </body>
</html>
