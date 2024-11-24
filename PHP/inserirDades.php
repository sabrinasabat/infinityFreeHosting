<?php
    //Archivo con la conexión a la base de datos
    include 'database.php';

    //Si no pongo como global no pilla la variable
    global $conexionDDBB;

    //Verifico si el método utilizado es el POST, si es, pillo los datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //pilo los datos de 'dades' que es el array que contiene los datos
        $dados_json = $_POST['dades'] ?? null; //Si no hay datos, la variable será null

        //Verifico si hay datos, porque si es null, no hay porque seguir con el proceso
        if ($dados_json) {

            /*Decodifico los datos JSON en un array. Para acceder a los datos del JSON en el PHP, necesito transformarlo
            en un formato que el PHP entienda. El array. Sera un array asociativo en vez de objetos */
            $dados = json_decode($dados_json, true);

            /*Había visto creo que en su paágina que siempre es importante verificar si los datos existen antes de hacer
            cualquier cosa por eso el isset. */
            if (isset($dados['nom'], $dados['edat'], $dados['dni'])) {

                //Atribuyo los valores a las variables
                $nom = $dados['nom'];
                $edat = $dados['edat'];
                $dni = $dados['dni'];

                // Preparar a instrução SQL para inserir os dados
                //Los ??? indican donde los valores seran inseridos
                $sql_insert = "INSERT INTO dades (nom, edat, dni) VALUES (?, ?, ?)";

                //Prepara la instrucción SQL para inserir los datos
                $sqlPreparada = $conexionDDBB->prepare($sql_insert);

                if ($sqlPreparada) {
                    /*Asignar los valores a los parámetros ??? de la instrucción SQL
                      "sis" porque es string para nom, int para edat y string para dni*/
                    $sqlPreparada->bind_param("sis", $nom, $edat, $dni);

                    //Ejecuto la instrucción para inserir los datos en la tabla de la base de datos
                    $sqlPreparada->execute();

                    //Cierro la instrucción
                    $sqlPreparada->close();
                }
            }
        }
    }

//Cierro la conexión con la base de datos
$conexionDDBB->close();
?>
