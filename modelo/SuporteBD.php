<?php
session_start();

if (isset($_POST['enviarRequisicao'])) {
    $requisicao = $_POST['requisicao'];
    $mensagem = $_POST['mensagem'];

    // Conectar ao banco de dados (substitua pelas suas configurações)
    $servidor = "localhost";
    $usuario = "root";
    $senha_db = "";
    $banco = "sistema_triagem";

    $conexao = new mysqli($servidor, $usuario, $senha_db, $banco);

    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    $email = $_SESSION['email'];
    $consulta_usuario = "SELECT id FROM usuarios WHERE email = '$email'";
    $resultado_usuario = $conexao->query($consulta_usuario);

    if ($resultado_usuario && $resultado_usuario->num_rows > 0) {
    $row_usuario = $resultado_usuario->fetch_assoc();
    $id_usuario = $row_usuario['id'];
    } else {
    // Tratar o caso em que o e-mail da sessão não corresponde a um usuário válido
    // Você pode redirecionar para uma página de erro ou fazer qualquer outra coisa
    }

    // Preparar e executar a consulta para inserir os dados no banco de dados
    $inserir_query = "INSERT INTO requisicoes (id_usuario, tipo, mensagem) VALUES ('$id_usuario', '$requisicao', '$mensagem')";

    if ($conexao->query($inserir_query) === TRUE) {
        // Redirecionar para tela-principal.php após a inserção bem-sucedida
        header("Location: tela-principal.php");
        exit;
    } else {
        echo "Erro ao enviar a requisição: " . $conexao->error;
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
}
?>
