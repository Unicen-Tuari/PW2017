<!DOCTYPE HTML>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>



        <?php
          $g = 1;
          function imprimirTabla($estudiantes, $edades)
          {
            echo "<table>";
            for ($i=0; $i < 4; $i++) {
              $nombre = $estudiantes[$i];
              echo "<tr><td>".$nombre . "</td><td>". $edades[$nombre]. "</td></tr>\n";
            }
            echo "</table>";
          }
          $estudiantes = array('Leandro', 'Juan', 'Nico', 'Facu');
          $edades = array('Leandro' => 35, 'Juan'=> 24, 'Nico'=> 23, 'Facu'=> 22);
          imprimirTabla($estudiantes, $edades);
          if (isset($_GET["usuario"]))
          {
            $quien = $_GET["usuario"];
            if(isset($edades[$quien]))
              echo $edades[$quien];
            else {
              echo "No se encuentra la persona";
            }
          }
          else
            echo "No especifico usuario";

        ?>
    </body>
</html>
