<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ordinales y Cardinales</title>
  </head>
  <body>
  <!--Usamos algunos estilos en línea para darle formato-->
  <table border 1px>
  <tr style="background-color:#A9CBCB;">
    <th>Cardinal</th>
    <th style="padding-right:200px">Ordinal</th>
  </tr>
  <?php
  //creamos una variable llamada cardinal que inicializamos en uno
  $cardinal=1;
  //mediante un bucle while, iremos recorriéndola hasta que su valor sea 10.
  while ($cardinal<=10){
    ?>
    <tr>
      <!--En cada celda añadiremos el valor correspondiente de la variable cardinal-->
      <td><?php echo $cardinal?></td>
      <?php
      //creamos una variable llamada ordinal a la que asignaremos el valor de la variable cardinal
      $ordinal=$cardinal;
      //En función del valor de ordinal: 1,2... le asignaremos el valor: primero, segundo...
      switch ($ordinal){
            case 1:
              $ordinal="Primero";
              break;
            case 2:
              $ordinal="Segundo";
              break;
            case 3:
              $ordinal="Tercero";
              break;
            case 4:
              $ordinal="Cuarto";
              break;
            case 5:
              $ordinal="Quinto";
              break;
            case 6:
              $ordinal="Sexto";
              break;
            case 7:
              $ordinal="Séptimo";
              break;
            case 8:
              $ordinal="Octavoo";
              break;
            case 9:
              $ordinal="Noveno";
              break;
            case 10:
              $ordinal="Décimo";
              break;
            default:
              break;
      } ?>
          <!--En cada celda añadiremos el valor correspondiente de la variable ordinall-->
        <td><?php echo $ordinal?></td>
    </tr>
    <?php
    //incrementamos el contador en cada vuelta
    $cardinal++;
  } ?>
  </table>
  </body>
</html>
