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
          echo "<table>";
        ?>
        <tr><th>Català</th><th>English</th></tr>
        <tr><td>coneixement</td><td>knowledge</td></tr>
        <tr><td>amor</td><td>love</td></tr>
        <tr><td>felicitat</td><td>happiness</td></tr>
        <tr><td>aigua</td><td>water</td></tr>
        <tr><td>aire</td><td>air</td></tr>
        <tr><td>pastis</td><td>cake</td></tr>
        <tr><td>doblers</td><td>money</td></tr>
        <tr><td>llibre</td><td>book</td></tr>
        <tr><td>bosc</td><td>forest</td></tr>
        <?php
          echo "</table>";
        ?>
                
        <br><br><hr><br>Codi font:<br>
        <?php
        highlight_string('
          <?php
            echo "<table>";
          ?>
          <tr><th>Spanish</th><th>English</th></tr>
          <tr><td>coneixement</td><td>knowledge</td></tr>
          <tr><td>amor</td><td>love</td></tr>
          <tr><td>felicitat</td><td>happiness</td></tr>
          <tr><td>aigua</td><td>water</td></tr>
          <tr><td>aire</td><td>air</td></tr>
          <tr><td>pastis</td><td>cake</td></tr>
          <tr><td>doblers</td><td>money</td></tr>
          <tr><td>llibre</td><td>book</td></tr>
          <tr><td>bosc</td><td>forest</td></tr>  
          <?php
            echo "</table>";
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
