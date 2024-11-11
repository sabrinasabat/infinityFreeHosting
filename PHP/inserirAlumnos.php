<?php
    include 'conexionDDBB_estudiante.php';

    global $conexion;
    //instrucción de una tabla
    $instruccion = "insert into estudiante values ('52666666F', 'Toni Dot Serra', 23, '2 GM')";

    if($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST['dni']) && !empty($_POST['nombre']) &&!empty($_POST['edad']) && !empty($_POST['ciclo'])){
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $ciclo = $_POST['ciclo'];
        $instruccion = "insert into estudiante values ('$dni', '$nombre', $edad, '$ciclo')";

        //Quitando los duplicados
        $sql_busqueda = "SELECT * FROM estudiante WHERE dni = '$dni'";
        $sql_resultado_busqueda = $conexion->query($sql_busqueda);

            if($sql_resultado_busqueda->num_rows==0){
                echo "Error: El estudiante ya existe";
            }else{
                $sql = "INSERT INTO estudiante (dni, nombre, edad, ciclo) VALUES ('$dni', '$nombre', $edad, '$ciclo')";
                $conexion->query($sql);
            }

    }
?>

/*    $res = mysqli_query($conexion, $instruccion);
if(mysqli_errno($conexion) !=0){
die ("No fue posible inserir los datos en la tabla");
} else{
echo "Datos inseridos";
}*/
