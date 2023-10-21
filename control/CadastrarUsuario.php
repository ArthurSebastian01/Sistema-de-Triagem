<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once "conexao_bd.php";

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


if ($email != "" && $senha != ""){

    $result_usuarios = "INSERT INTO usuarios (nome, sobrenome, email, idade, telefone, sexo, senha)
    VALUES ('$nome', '$sobrenome', '$email', '$idade', '$telefone', '$sexo',  '$senha')";
    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

    if ($resultado_usuarios) {
        $_SESSION["email"] = $email;
        header("Location: ../view/FichaAnamnese.php");
        exit();
    } else {
        $_SESSION['mensagem_erro'] = "Erro ao realizar cadastro.";
        header("Location: ../view/tela-de-cadastro.php");
        exit();
    }
}




