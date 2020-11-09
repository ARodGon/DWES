<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabla Multiplicar</title>
    <!--Colocamos los estilos en el head-->
    <style>
      th {
        padding-right: 40px;
      }
      #titulo {
        background-color:#A9CBCB;
        border: 1px solid black;
      }
      table, th, td {
        border: 1px solid black;
      }
      table {
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>

    <table>
    <tr id="titulo">
      <th>Primera tabla</th>
      <th>Segunda Tabla</th>
      <th>Tercera Tabla</th>
    </tr>

    <?php
    //creamos el array llamado tablas
    $tablas=[
      "primera"=>5,
      "segunda"=>13,
      "tercera"=>11
    ];
    //Utilizando el bucle for recorreremos los números del 1 al 10 y con foreach el array tablas
      for ($i=1; $i < 11; $i++) {
        echo "<tr>";
        foreach ($tablas as $value) {
          echo"<td>".$value."x".$i."=".$value*$i."</td>";
        }
        echo "</tr>";
    }?>

    </table>
  </body>
</html>
