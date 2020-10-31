<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Funcion2</title>
  </head>
  <body>
    <?php
    //funcion con varios argumentos de entrada
    function NombreEdad ($nombre, $edad) {
      echo "$nombre Molina. Su edad es: $edad <br>";
    }

    NombreEdad ("Juan", "15");
    NombreEdad ("Rosa", "20");
    NombreEdad ("Paco", "30");
    ?>

  </body>
</html>
