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
          <br>1. Sortida per pantalla i variables
        </h2>
      </div>

      <div id="content">
        <?php
          $x = 144;
          $y = 999;

          echo "x = ", $x;
          echo "<br>y = ", $y;
          echo "<br>x + y = ", $x + $y;
          echo "<br>x - y = ", $x - $y;
          echo "<br>x / y = ", $x / $y;
          echo "<br>x * y = ", $x * $y;
        ?>
                
        <br><br><hr><br>Codi font:<br>
        <?php
          highlight_string('
          <?php
            $x = 144;
            $y = 999;

            echo "x = ", $x;
            echo "<br>y = ", $y;
            echo "<br>x + y = ", $x + $y;
            echo "<br>x - y = ", $x - $y;
            echo "<br>x / y = ", $x / $y;
            echo "<br>x * y = ", $x * $y;
          ?>
          ');
        ?>
      </div>
      <div id="footer">
        © Xavier Sastre
      </div>
    </div>
  </body>
</html>
