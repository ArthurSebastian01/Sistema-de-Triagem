<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Inclua a conexão com o banco de dados
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

if ($resultado->num_rows == 1) {
    // Usuário encontrado, agora exclua o perfil
    $exclusao = "DELETE FROM usuarios WHERE email = '$email'";
    
    if ($conexao->query($exclusao) === TRUE) {
        // Perfil excluído com sucesso, redirecione para a página de login
        header("Location: ../view/login.php");
        exit();
    } else {
        // Lida com erros, se houver
        echo "Erro ao excluir o perfil: " . $conexao->error;
    }
} else {
    // Trate o caso em que o usuário não foi encontrado
    echo "Usuário não encontrado.";
}

$conexao->close();
?>
