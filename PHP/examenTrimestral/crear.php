<?php
    include 'conexion.php';
    global $conexion;
?>
    //crear.php. Será un formulario para rellenar todos los campos de productos (a excepción del id).
    // Para la familia nos aparecerá un "select" con los nombres de las familias de los productos para elegir uno
    //(lógicamente, aunque mostremos los nombres pro formulario enviaremos el código).

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Clientes</title>
</head>
<body>
  <form>

    <h1>Crear Producto</h1>
      <label for="nombre">Nombre</label><br>
      <input type="text"  name="nombre" id="nombre" required>
      <br>
      <label for="nombreCorto">Nombre Corto</label><br>
      <input type="text"  name="nombreCorto" id="nombreCorto" required>
      <br>
      <label for="precio">Precio (€)</label>
      <input type="text" placeholder="Precio (€)" name="precio" id="precio" required>
      <br>
      <label for="familia">Familia</label>
      <select name="familia" id="familia">
          <option value="camara">Cámaras digitales</option>
          <option value="consola">Consolas</option>
          <option value="libro">Libros Electrónicos</option>
          <option value="impresora">Impresoras</option>
          <option value="memoria">Memoria Flash</option>
          <option value="mp3">Reproductores MP3</option>
          <option value="multif">Equipos Multifunción</option>
          <option value="netbook">Netbooks</option>
          <option value="ordenadores">Ordenadores</option>
          <option value="portatil">Ordenadores Portátiles</option>
          <option value="routers">Routers</option>
          <option value="sai">Sistema de alimentación ininterrumpida</option>
          <option value="software">Software</option>
          <option value="tv">Televisores</option>
          <option value="videocamaras">Videocámaras</option>
      </select>
      <label for="descripcion">Descripción</label>
      <button type="submit">Crear</button>
  </form>
</body>
</html>





