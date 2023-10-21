<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('control/conexao_bd.php');
date_default_timezone_set('America/Sao_Paulo');
header("Content-type: text/html; charset=utf-8");


//verifica de existe as variaveis email e senha, caso não exista, redireciona para tela de login com mensagem de erro
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: ../tela-de-login.php');
    $_SESSION['emBranco'] = true;
	exit();
}

//atribui as variaveis de post para variaveis locais
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
//criptografa a senha para verificar no banco
$senha_cripto = hash($senha);
//cria a query de consulta para verificar se usuario existe no bd
$query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha_cripto'";
//realiza a consulta no banco
$result = mysqli_query($conexao, $query);
//atribui as consultas do banco a essa variavel, é possivel pegar a informação com o nome da coluna ['coluna']
$row_usuario = mysqli_fetch_assoc($result);
//retorna a consulta do banco
$row = mysqli_num_rows($result);

//se retornar cria as variaveis de sessao e manda para dentro do sistema
if($row == 1) {
    $nivel_de_acesso = $row_usuario["niveldeacesso"];
    $_SESSION['niveldeacesso'] = $nivel_de_acesso;
	$_SESSION['email'] = $email;
	header('Location: tela_logado.php');
	exit();
//senao manda para tela de login com mensagem de erro
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: tela-de-login.php');
	exit();
}
