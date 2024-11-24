<?php
//testeando con un script creado por mi

    //URL del archivo donde los datos seran enviados
    $url = "http://ssabat.infinityfreeapp.com/PHP/inserirDades.php";

    //Datos definidos en JSON que seran enviados
    $dados = array( //He creado el array que será enviado por POST utilizando la funcion abajo "http_build_query".
        "dades" => json_encode(array( //json_encode convierte un array en un string JSON
            "nom" => "Rafael Garcia",
            "edat" => 44,
            "dni" => "48975000L"
        ))
    );

    //Configurar la requisición POST https://www.php.net/manual/pt_BR/context.http.php
    $confReq = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded", //formato de los datos (padrón de formularios HTML)
            'method'  => 'POST', //método de envío
            'content' => http_build_query($dados), //datos a seren enviados convertido en un formato adecuado
        ),
    );

    /*Transformo el array $confReq, que es el que define el método, encabezado y pilla los datos configurado anteriormente
      en un objeto que será utilizado en la función 'file_get_contents' para que se pueda realizar la requisición.
      https://www.php.net/manual/pt_BR/function.stream-context-create.php*/
    $context = stream_context_create($confReq);

    /*Esta función conecta al servidor pasado por la $url, envía los datos utilizando todo el $context configurado
      anteriormente y retorna la respuesta del servidor. Entendí que sin esa función los datos no son enviados para el
      servidor. El use_include_path está como falso porque no estamos buscando un archivo local.
      https://www.php.net/manual/pt_BR/function.file-get-contents.php*/
    $resultado = file_get_contents($url, false, $context);

?>
