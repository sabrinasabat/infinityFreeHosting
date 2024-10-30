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
          $pessetes = 1000;
          echo $pessetes, " pessetes són ", round($pessetes / 166.386, $precissio = 2), " euros.";
        ?>
                
        <br><br><hr><br>Codi font:<br>
        <?php
        highlight_string('
        <?php
          $pessetes = 1000;
          echo $pessetes, " pessetes són ", round($pessetes / 166.386, $precissio = 2), " euros.";
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
