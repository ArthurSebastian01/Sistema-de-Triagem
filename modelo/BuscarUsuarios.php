<?php
include_once "conexao_bd.php";


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


// Consulta para verificar se o usuário com o email e senha existe
$consulta_usuario = "SELECT id, nome FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$resultado_consulta = mysqli_query($conn, $consulta_usuario);

if (mysqli_num_rows($resultado_consulta) > 0) {
    // Usuário encontrado, redirecione para a tela-principal.php
    header("Location: tela-principal.php");
    exit(); // Certifique-se de sair após o redirecionamento
} else {
    // Se o usuário não for encontrado, defina uma variável de sessão com a mensagem de erro
    session_start();
    $_SESSION['mensagem_erro'] = "Usuário não cadastrado.";
    header("Location: tela-de-login.php");
    exit();
}

?>
