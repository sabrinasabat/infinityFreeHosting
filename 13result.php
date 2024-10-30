<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          DAWDWES Xavier Sastre Act.Oct24
        </h1>
        <h2>
          SOLUCIONS ALS EXERCICIS
        </h2>
        <h2>
          <br>3. Sentencia condicional
        </h2>
      </div>

      <div id="content">
        <?php

          $a = $_POST['a'];
          $b = $_POST['b'];
          $c = $_POST['c'];

          // ordenación de los dos primeros números
          if ($a > $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
          }

          // ordenación de los dos últimos números
          if ($b > $c) {
            $aux = $b;
            $b = $c;
            $c = $aux;
          }

          // se vuelven a ordenar los dos primeros
          if ($a > $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
          }

          echo "Los números introducidos ordenados de menor a mayor son $a, $b y $c."; 

        ?>
        <br><br>
        <a href="index.php">>> Volver</a>       
      </div>
      
      <div id="footer">
        © Xavier Sastre
      </div>
      
    </div>
  </body>
</html>
