<?php
// Modelo básico para Cookies

// Criar um cookie
setcookie("nome_do_cookie", "valor_do_cookie", time() + 3600); // Expira em 1 hora

// Recuperar o valor do cookie
if(isset($_COOKIE["nome_do_cookie"])) {
    echo "O valor do cookie é: " . $_COOKIE["nome_do_cookie"];
} else {
    echo "Cookie não encontrado.";
}

// Deletar um cookie
setcookie("nome_do_cookie", "", time() - 3600);
?>
//-----------------------------------------------------------------------------------------------------------------------
//Modelo básico para session

<?php
session_start(); // Inicia a sessão

// Armazenar um valor na sessão
$_SESSION["nome_da_variavel"] = "valor_da_variavel";

// Recuperar um valor da sessão
if(isset($_SESSION["nome_da_variavel"])) {
    echo "O valor da sessão é: " . $_SESSION["nome_da_variavel"];
}

// Destruir uma sessão
session_destroy();
?>