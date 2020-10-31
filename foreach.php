<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ForEach</title>
  </head>
  <body>
    <?php
      $colores= array("rojo","amarillo","azul","verde");
      foreach ($colores AS $valores) {
        echo "$valores <br>";        
      }
    ?>
  </body>
</html>
