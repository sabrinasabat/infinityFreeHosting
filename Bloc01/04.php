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
        <table>
        <tr>
          <th>Dilluns</th><th>Dimarts</th><th>Dimecres</th><th>Dijous</th><th>Divendres</th>
        </tr>
        <?php
          echo "<tr><td>DWES</td><td>LCONW</td><td>LCONW</td>";
          echo "<td>DESPL</td><td>INTER</td></tr>";
        ?>
        <tr><td>DWES</td><td>LCONW</td><td>EIEW</td><td>EIEW</td><td>INTER</td></tr>
        <tr><td>DWES</td><td>DWES</td><td>EIEW</td><td>EIEW</td><td>INTER</td></tr>
        <tr><td colspan="5"><center>E S P L A I</center></td></tr>
        <tr><td>DWEC</td><td>SERV</td><td>INTER</td><td>DWEC</td><td>DWES</td></tr>
        <tr><td>DWEC</td><td>DESPL</td><td>INTER</td><td>DWEC</td><td>DWES</td></tr>
        <tr><td>DWEC</td><td>DESPL</td><td>INTER</td><td>DWEC</td><td>DWES</td></tr>
        </table>

        <br><br><hr><br>Codi font:<br>
        <?php
        highlight_string('
          <table>
          <tr>
            <th>Dilluns</th><th>Dimarts</th><th>Dimecres</th><th>Dijous</th><th>Divendres</th>
          </tr>
          <?php
            echo "<tr><td>DWES</td><td>LCONW</td><td>LCONW</td>";
            echo "<td>DESPL</td><td>INTER</td></tr>";
          ?>
          <tr><td>DWES</td><td>LCONW</td><td>EIEW</td><td>EIEW</td><td>INTER</td></tr>
          <tr><td>DWES</td><td>DWES</td><td>EIEW</td><td>EIEW</td><td>INTER</td></tr>
          <tr><td colspan="5"><center>R E C R E O</center></td></tr>
          <tr><td>DWEC</td><td>SERV</td><td>INTER</td><td>DWEC</td><td>DWES</td></tr>
          <tr><td>DWEC</td><td>DESPL</td><td>INTER</td><td>DWEC</td><td>DWES</td></tr>
          <tr><td>DWEC</td><td>DESPL</td><td>INTER</td><td>DWEC</td><td>DWES</td></tr>
          </table>
          ');
          ?>
      </div>
      <div id="footer">
        © Xavier Sastre
      </div>
    </div>
  </body>
</html>
