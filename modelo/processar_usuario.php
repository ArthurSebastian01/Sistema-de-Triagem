<?php
session_start(); // Inicie a sessão (certifique-se de fazer isso no início de todas as páginas que usam sessões)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere o e-mail do formulário
    $email = $_POST["email"];


    // Salve o e-mail na sessão
    $_SESSION["email"] = $email;

    // Redirecione o usuário para a próxima página
    header("Location: BuscarPerfil.php");
    exit;
}
?>
