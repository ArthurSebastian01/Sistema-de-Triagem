<?php
session_start();

// Conecte-se ao banco de dados (substitua com suas próprias configurações)
$servidor = "localhost";
$usuario = "root";
$senha_db = "";
$banco = "sistema_triagem";

$conexao = new mysqli($servidor, $usuario, $senha_db, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Consulta para obter os detalhes do usuário com base no e-mail da sessão
$email = $_SESSION['email'];
$consulta = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = $conexao->query($consulta);

if ($resultado && $resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $nome = $row['nome'];
    $sobrenome = $row['sobrenome'];
    $idade = $row['idade'];
    $sexo = $row['sexo'];
    $telefone = $row['telefone'];
    
    // Destrua a sessão após buscar os detalhes do usuário
    session_destroy();
} else {
    // Tratar o caso em que o e-mail da sessão não corresponde a um usuário válido
    // Você pode redirecionar para uma página de erro ou fazer qualquer outra coisa
}

$conexao->close();
?>
