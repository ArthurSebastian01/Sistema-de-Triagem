<?php
session_start();
include_once("conexao_bd.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$consulta_usuario = "SELECT id, nome FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$resultado_consulta = mysqli_query($conn, $consulta_usuario);

if (mysqli_num_rows($resultado_consulta) > 0) {
    $_SESSION['email'] = $email;
    header("Location: tela-principal.php");
    exit();
} else {
    $_SESSION['mensagem_erro'] = "Usuário não cadastrado.";
    header("Location: tela-de-login.php");
    exit();
}
?>
