<?php
session_start();
include_once "conexao_bd.php";

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuarios = "INSERT INTO usuarios (nome, sobrenome, email, idade, telefone, sexo, senha)
VALUES ('$nome', '$sobrenome', '$email', '$idade', '$telefone', '$sexo',  '$senha')";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

// Verifica se a inserção foi bem-sucedida
if ($resultado_usuarios) {
    // Redireciona para tela-principal.php
    //header("Location: Dados_clinicos.php");
    $_SESSION['email'] = $email;
    header("location: Dados_clinicos.php");
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
