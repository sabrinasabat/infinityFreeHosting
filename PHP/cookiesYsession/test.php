<!DOCTYPE html>
<html>
    <head>
        <title>Exemplo de Cookie</title>
    </head>
    <body>
        <p>Aprendendo..</p>
        <?php
        // Actualiza el valor de la cookie cuando clicar en el botón
            if(isset($_GET['actualizar'])){
                setcookie('nome_usuario', 'Maria', time() + 3600);
                header("Location: test.php");
                exit();
            }
        // Verifica si la cookie existe y muestra un mensaje de bienvenida
            if(isset($_COOKIE['nome_usuario'])){
                echo "Hola, " . $_COOKIE['nome_usuario'] . " bem-vindo de volta";
            } else{
                echo "Esta é a sua primeira visita, bem-vinda!";
            }

        // Deletar el cookie
            if(isset($_GET['deletar'])){
                setcookie('nome_usuario', '', time()-3600);
                header("Location: test.php");
                exit();
            }
        ?>


        <p><a type="button" href="test.php?actualizar=true">Actualizar Cookie</a></p>
        <p><a href="test.php?deletar=true">Deletar el Cookie</a> </p>
    </body>
</html>
<?php
 //// Cria um cookie chamado "nome_usuario" com o valor "João" e duração de 7 dias
//setcookie("nome_usuario", "João", time() + (7 * 24 * 60 * 60));

// mirando el valor de la cookie después de haberla creado
/*if(isset($_COOKIE['nome_usuario'])){
    echo "hola, " . $_COOKIE['nome_usuario']. " bem-vindo de volta";
} else{
    echo "Esta cookie não existe";
}*/
?>