<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=advice-width, initial-scale=1.0">
        <title>Tienda Virtual</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h1>Productos de la categoría Ropa:</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Categorías</th>
            </tr>
            <?php
                //He pillado $productos de 'indice.php' para enseñarlos formatado en HTML
                global $productos;
                foreach ($productos as $producto):
            ?>
            <tr>
                <td><?php echo $producto->getNombreProducto();?></td>
                <td><?php echo number_format($producto->getPrecio(), 2, '.'). ' €';?></td>
                <td><?php echo $producto->getDescripcion();?></td>
                <td>
                    <?php foreach($producto->categorias as $categoria):?>
                        <?php echo $categoria->getNombre()." "; ?>
                    <?php endforeach;?>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>