<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Conecte-se ao banco de dados (substitua com suas próprias configurações)
$servidor = "localhost";
$usuario = "root";
$senha_db = "";
$banco = "sistema_triagem";

$conexao = new mysqli($servidor, $usuario, $senha_db, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Consulta para obter o ID do usuário com base no e-mail da sessão
$email = $_SESSION['email'];
$consulta_usuario = "SELECT id, nome FROM usuarios WHERE email = '$email'";
$resultado_usuario = $conexao->query($consulta_usuario);

if ($resultado_usuario && $resultado_usuario->num_rows > 0) {
    $row_usuario = $resultado_usuario->fetch_assoc();
    $id_usuario = $row_usuario['id'];
    $nome_usuario = $row_usuario['nome'];

    // Consulta para obter os dados da tabela 'ficha' com base no 'id_usuario'
    $consulta_ficha = "SELECT nivel_alteracao_intestino, nivel_sangramento_fezes, nivel_dor_abdomen, nivel_emagrecimento_repentino FROM ficha WHERE id_usuario = '$id_usuario'";
    $resultado_ficha = $conexao->query($consulta_ficha);

    if ($resultado_ficha && $resultado_ficha->num_rows > 0) {
        $row_ficha = $resultado_ficha->fetch_assoc();

        // Obtenha os valores relevantes da tabela 'ficha'
        $nivel_alteracao_intestino = $row_ficha['nivel_alteracao_intestino'];
        $nivel_sangramento_fezes = $row_ficha['nivel_sangramento_fezes'];
        $nivel_dor_abdomen = $row_ficha['nivel_dor_abdomen'];
        $nivel_emagrecimento_repentino = $row_ficha['nivel_emagrecimento_repentino'];
    } else {
        // Trate o caso em que não há dados na tabela 'ficha' para o 'id_usuario'
        // Você pode definir valores padrão ou fazer qualquer outra coisa
    }
} else {
    // Tratar o caso em que o e-mail da sessão não corresponde a um usuário válido
    // Você pode redirecionar para uma página de erro ou fazer qualquer outra coisa
}
// Feche a conexão com o banco de dados
$conexao->close();
?>
