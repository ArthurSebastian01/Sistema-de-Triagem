<?php
require_once "../modelo/cadastro.php";
$nome         = $_POST['txtNome'];
$sobrenome    = $_POST['txtSobrenome'];
$email        = $_POST['txtEmail'];
$senha        = $_POST['txtSenha'];
$cliente = new Cliente();
$cliente->setNome($nome);
$cliente->setSobrenome($nome);
$cliente->setEmail($email);
$cliente->setSenha($senha);
$resultado = $cliente->cadastrar();
if($resultado==true){
    echo "Cadastrado com sucesso";
}else{
    $_SESSION['emBranco'] = true;
	header('Location: tela-de-cadastro.php');
    echo "Erro ao se cadastrar";
	exit();
}
?>