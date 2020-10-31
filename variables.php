<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Variables PHP</title>
  </head>
  <body>
    <?php
    //Declaramos las variables y las incializamos
    $nombreFamoso="Brie Larson"; //variable tipo string
    $edadFamoso=31;//variable tipo integer
    $Famosovivo=true; //variable tipo boolean
    ?>
    <!--Mostramos por pantalla las variables dentro de etiquetas <p></p> -->
    <p>El famoso cuyo nombre es: <?php echo "$nombreFamoso <br>"?></p>
    <p>Tiene una edad de: <?php echo $edadFamoso?> años<br></p>
    <p>¿Está vivo?
      <?php
      if ($Famosovivo==true) {
        echo "Si, aún vive";
      } else {
        echo "No, ha muerto";
      }
       ?>
     </p>
  </body>
</html>
