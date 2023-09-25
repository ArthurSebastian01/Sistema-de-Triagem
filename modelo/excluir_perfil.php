<?php
// Inclua a conexão com o banco de dados
include "conexao_bd.php";

// Implemente a lógica para excluir o perfil (substitua 'ID_DO_USUARIO' pelo ID do usuário correto)
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$sql = "DELETE FROM usuarios WHERE email = '$email'";

if (mysqli_query($conn, $sql)) {
    // Perfil excluído com sucesso, redirecionar para a página de login, por exemplo
    header("Location: tela-de-login.php");
    exit();
} else {
    // Lida com erros, se houver
    echo "Erro ao excluir o perfil: " . mysqli_error($conn);
}
?>
