<?php

$servername = "localhost";
$username = "root";
$password = "Swagnabrisa1";
$database_name = "web_service";

try{
    $conection  = new PDO("mysql:host=$servername; dbname=$database_name", $username, $password);
    echo "Conectado a la base de datos. \n";
} catch (PDOException $e){
    die("Error. " . $e->getMessage());
}
