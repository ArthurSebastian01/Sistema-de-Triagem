<?php
// Inclua a conexão com o banco de dados
include "conexao_bd.php";

// Verifique se a sessão está ativa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifique se os campos do formulário existem e se o e-mail está na sessão
if (isset($_POST['Nome'], $_POST['Sobrenome'], $_POST['email'], $_POST['Idade'], $_POST['Sexo'], $_POST['Telefone'], $_SESSION['email'])) {
    $nome = $_POST['Nome'];
    $sobrenome = $_POST['Sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['Idade'];
    $sexo = $_POST['Sexo'];
    $telefone = $_POST['Telefone'];
    $email_sessao = $_SESSION['email'];

    // Consulta SQL para atualizar os dados do usuário com base no e-mail da sessão
    $sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade', sexo = '$sexo', telefone = '$telefone' WHERE email = '$email_sessao'";

    if (mysqli_query($conn, $sql)) {
        // Os dados foram atualizados com sucesso
        header("Location:../view/PerfilUser.php");
        exit();
    } else {
        // Lida com erros, se houver
        echo "Erro ao atualizar dados do perfil: " . mysqli_error($conn);
    }
} else {
    // Se algum campo do formulário estiver ausente ou se o e-mail da sessão não estiver definido
    echo "Por favor, preencha todos os campos do formulário e verifique se a sessão está ativa.";
}
?>
