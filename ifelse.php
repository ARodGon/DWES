<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IF ELSE</title>
  </head>
  <body>
    <?php
    //date es una funcion que da formato a la fecha y hora local
    //$fechaHora=date("l jS \of F Y H:i:s");
    //echo $fechaHora;

    $t=date("H");
    if ($t<"20") {
      echo "Ten un buen día";
    } else {
      echo "Ten una buena noche";
    }

    ?>
  </body>
</html>
