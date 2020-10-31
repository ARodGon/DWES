<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Funcion3</title>
  </head>
  <body>
    <?php
    //funcion que devuelve un valor
    function suma ($a,$b){
      $result=$a+$b;
      return $result;
    }

    echo "15+10=".suma(15,10);
    echo "<br>";
    echo "9+3=".suma(9,3);
    
    ?>
  </body>
</html>
