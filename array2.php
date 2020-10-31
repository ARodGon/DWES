<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array2</title>
  </head>
  <body>
    <?php
    //array asociativo 
    $edad = array("Pedro"=>"25", "Ale"=>"37", "Sara"=>"23");

    foreach($edad as $x => $x_valor) {
      echo "clave=" . $x . ", Valor=" . $x_valor;
      echo "<br>";
    }
    ?>

  </body>
</html>
