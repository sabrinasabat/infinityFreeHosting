<?php
include 'conection_ddbb.php';
global $conection;

$method = $_SERVER["REQUEST_METHOD"]; //pillo el metodo de la requisicion
$uri = $_SERVER["REQUEST_URI"]; //pillo la URI completa

// Obtener la parte de la URI después del archivo cliente.php
$script_name = $_SERVER["SCRIPT_NAME"];

//strlen() = calcula el comprimiento de la string que hay en $script_name
//substr() = crea una substring de la uri, empezando en el indice indicado por strlen($script_name)
//ejemplo: si $uri es /cliente.php/cliente, el código removerá /cliente.php y mantiene apenas /clientes
//Ahora tengo la parte de la URI que me interesa, o sea /cliente
$relative_uri = substr($uri, strlen($script_name)); //removo la parte del script_name
$path = parse_url($relative_uri, PHP_URL_PATH);
//parse_url = divide la url en sus componentes = (el camino, query string, host, etc)
//PHP_URL_PATH = retorna apenas la parte del camino, ignorando parametros o fragmentos
// $path será "/cliente" (descarta "?nombre=Juan").

//trim("/") = para eliminar las barras
//explode("/") = para dividir la cadena en partes, crea un array
$parts = explode("/", trim($path, "/"));

//Pillo la primera parte del array, que es "cliente"
$entryPoint = $parts[0];

if($entryPoint === "cliente") {
    switch ($method) {
        case "GET": //Read
            echo "Has utilizado el metodo GET.\n \n";
            http_response_code(200); //código de respuesta
            $statment = $conection->prepare("SELECT * FROM cliente");
            $statment->execute();
            while($row = $statment->fetch(PDO::FETCH_ASSOC)){ //recojo con un bucle los resultados de la query
                echo json_encode($row); //convierto cada linea en un json
                echo "\n";
            }
            break;
        case "POST": //Crear
            echo "Has utilizado el metodo POST. \n \n";
            http_response_code(200); //código de respuesta
            if(isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['edad']) && isset($_GET['email'])){ //verifico si todos los campos obligatorios fueron enviados
                $nombre = $_GET['nombre'];
                $apellido = $_GET['apellido'];
                $edad = $_GET['edad'];
                $email = $_GET['email']; //pillo los valores que fueron pasados por parametro

                $statment = $conection->prepare("INSERT INTO cliente (nombre, apellido, edad, email) VALUES (:nombre, :apellido, :edad, :email)");
                $statment->bindParam(':nombre', $nombre);
                $statment->bindParam(':apellido', $apellido);
                $statment->bindParam(':edad', $edad);
                $statment->bindParam(':email', $email); //asocio los valores de los parametros en las querys correspondientes

                if($statment->execute()){ //ejecuto la query
                    echo json_encode(['mensaje:' => 'Cliente insertado con succeso']);
                }else{
                    echo json_encode(['mensaje:' => 'Error al insertar el cliente.']);
                }
            } else {
                json_encode(['mensaje' => 'Tienes que rellenar todos los campos']);
            }
            break;
        case "DELETE": //Delete
            echo "Has utilizado el metodo DELETE. \n \n";
            http_response_code(200);
            if(isset($_GET['id'])){ //verifico si el campo id fue enviado
                $id = $_GET['id']; //pillo su valor

                $statment = $conection->prepare("DELETE FROM cliente WHERE id= :id"); //query
                $statment -> bindParam(':id', $id); //asocio el valor del parametro en la query

                if($statment->execute()){
                    echo json_encode(['mensaje:' => 'Cliente deletado con succeso']);
                } else {
                    echo json_encode(['mensaje:' => 'Error al deletar el cliente']);
                }
            } else {
                json_encode(['mensaje: ' => 'Tienes que rellenar el campo ID']);
            }
            break;
        case "PUT": //Update
            echo "Has utilizado el metodo PUT. \n \n";
            http_response_code(200); //código de respuesta

            if (isset($_GET['id'])) { //verifico si el campo id fue enviado
                $id = $_GET['id']; //pillo su valor

                // busco el registro actual en la ddbb por el id pasado
                $statment = $conection->prepare("SELECT * FROM cliente WHERE id = :id");
                $statment->bindParam(':id', $id);
                $statment->execute();
                $cliente = $statment->fetch(PDO::FETCH_ASSOC); //pillo el registro encontrado

                if ($cliente) { //si el cliente con este id fue encontrado:
                    // mantengo los valores que ya existia si no fueron pasados por parametros
                    if(isset($_GET['nombre'])){
                        $nombre = $_GET['nombre'];
                    } else {
                        $nombre = $cliente['nombre'];
                    }

                    if(isset($_GET['apellido'])){
                        $apellido = $_GET['apellido'];
                    } else {
                        $apellido = $cliente['apellido'];
                    }

                    if(isset($_GET['edad'])){
                        $edad = $_GET['edad'];
                    } else {
                        $edad = $cliente['edad'];
                    }

                    if(isset($_GET['email'])){
                        $email = $_GET['email'];
                    } else {
                        $email = $cliente['email'];
                    }

                    // Actualiza el registro con los nuevos valores
                    $statmentActualizado = $conection->prepare("UPDATE cliente SET nombre = :nombre, apellido = :apellido, edad = :edad, email = :email WHERE id = :id");
                    $statmentActualizado->bindParam(':nombre', $nombre);
                    $statmentActualizado->bindParam(':apellido', $apellido);
                    $statmentActualizado->bindParam(':edad', $edad);
                    $statmentActualizado->bindParam(':email', $email);
                    $statmentActualizado->bindParam(':id', $id);

                    if ($statmentActualizado->execute()) { //ejecuto la query
                        echo json_encode(['mensaje' => 'Cliente actualizado con exito.']);
                    } else {
                        echo json_encode(['mensaje' => 'Error al actualizar el cliente.']);
                    }
                } else {
                    echo json_encode(['mensaje' => 'Cliente no encontrado.']);
                }
            } else {
                echo json_encode(['mensaje' => 'El campo ID es obligatorio.']);
            }
            break;
        default:
            echo "Este metodo no esta permitido";
            http_response_code(405);
            break;
    }
} else {
    echo "URI incorrecta";
    http_response_code(404);
}
?>
