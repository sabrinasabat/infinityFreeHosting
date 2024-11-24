<?php
//Archivo con la conexión a la base de datos
include 'database.php';
global $conexionDDBB; //Si no pongo como global no pilla la variable

//Verifico si el método utilizado es el POST, si es, pillo los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //pillo los datos enviados en el campo 'dades'
    $dades = $_POST['dades'] ?? null; //Si no hay datos, la variable será null

    //Verifico si hay datos, porque si es null, no hay porque seguir con el proceso
    if ($dades) {
        /*Decodifico los datos JSON en un array. Para acceder a los datos del JSON en el PHP, necesito transformarlo
          en un formato que el PHP entienda. El array. Sera un array asociativo en vez de objetos */
        $dades_json = json_decode($dades, true);

        /*Había visto creo que en su paágina que siempre es importante verificar si los datos existen antes de hacer
          cualquier cosa por eso el isset. */
        if (isset($dades_json['nom'], $dades_json['edat'], $dades_json['dni'])) {
            //Atribuyo los valores a las variables
            $nom = $dades_json['nom'];
            $edat = (int)$dades_json['edat'];
            $dni = $dades_json['dni'];

            echo "Nome: $nom, Idade: $edat, DNI: $dni<br>";

            // Preparar a instrução SQL para inserir os dados
            //Los ??? indican donde los valores seran inseridos
            $sql_insert = "INSERT INTO dades (nom, edat, dni) VALUES (?, ?, ?)";

            //Prepara la instrucción SQL para inserir los datos
            $stmt = $conexionDDBB->prepare($sql_insert);

            if ($stmt) {
                /*Asignar los valores a los parámetros ??? de la instrucción SQL
                 "sis" porque es string para nom, int para edat y string para dni*/
                $stmt->bind_param("sis", $nom, $edat, $dni);

                //Ejecuto la instrucción para inserir los datos en la tabla de la base de datos
                if ($stmt->execute()) {
                    echo "Datos insertados con succeso!";
                } else {
                    echo "Error al insertar en la base de datos: " . $stmt->error;
                }

                //Cierro la instrucción
                $stmt->close();
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "Método POST detectado.<br>";
                echo "Dados recebidos:<br>";
                var_dump($_POST);
            } else {
                echo "Método recebido: " . $_SERVER["REQUEST_METHOD"] . "<br>";
                echo "Nenhum dado foi enviado.<br>";
            }

        }
    }
}

    $conexionDDBB->close();
?>