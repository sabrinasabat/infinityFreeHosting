<?php
    session_start();
    echo '<h1>Bienvenido, '. $_SESSION['usuario']. '!</h1>';

    $datosClientes = [["cliente" => "Maria",
        "usuario" => "mmaria",
        "contrasena" => "m123"],
        ["cliente" => "Juan",
            "usuario" => "juan",
            "contrasena" => "j123"],
        ["cliente" => "Laura",
            "usuario" => "laura",
            "contrasena" => "l123"]
    ];

    if(isset($_POST['nombreCliente']) && isset($_POST['usuarioNuevo']) && isset($_POST['contrasenaNueva'])){
        $nuevoCliente = ["cliente" => $_POST['nombreCliente'], "usuario" => $_POST['usuarioNuevo'], "contrasena" => $_POST['contrasenaNueva']];

        $datosClientes[] = $nuevoCliente;
    }

    $_SESSION['clientes'] = $datosClientes;

    $soportes = ["Peliculas", "Series", "Juegos"];
    echo '<h3>Datos de los clientes</h3>';
    echo '<table border="1" style="width: 50%">';
    echo '<tr style="background-color: #9a8702">';
    echo '<th>Cliente</th>';
    echo '<th>Usuario</th>';
    echo '<th>Contraseña</th>';
    echo '</tr>';
    foreach ($datosClientes as $datos){
        echo '<tr style="background-color: #d3d3d3">';
        echo '<th>'. $datos['cliente'].'</th>';
        echo '<th>'. $datos['usuario'].'</th>';
        echo '<th>'.$datos['contrasena'].'</th>';
        echo '</tr>';
    }
    echo '</table>';
    echo '<br><br>';

    echo '<h3> Datos del Soporte</h3>';
    echo '<table border="1" width="50%">';
    echo '<tr style="background-color: #9a8702">';
    echo '<th>Soporte</th>';
    echo '</tr>';
    foreach ($soportes as $soporte){
        echo '<tr style="background-color: #d3d3d3">';
        echo '<th>'.$soporte.'</th>';
        echo '</tr>';
    }
    echo '</table><br>';
    echo '<a href="formCreateCliente.html">Crear nuevos clientes</a><br><br>';







    echo '<a href="logout.php">Encerrar sessión</a>';
?>
