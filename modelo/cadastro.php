<?php
include_once "conexao_bd.php";

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuarios = "INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

// Verifica se a inserção foi bem-sucedida
if ($resultado_usuarios) {
    // Redireciona para tela-principal.php
    header("Location: tela-principal.php");
    exit(); // Certifique-se de sair após o redirecionamento
} else {
    // Se ocorrer um erro na inserção, defina uma mensagem de erro na variável de sessão
    session_start();
    $_SESSION['mensagem_erro'] = "Erro ao inserir dados no banco de dados.";

    // Redirecione de volta para a tela-de-cadastro.php
    header("Location: tela-de-cadastro.php");
    exit();
}
?>
