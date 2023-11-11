<?php
// Inclua a conexão com o banco de dados
include "conexao_bd.php";

// Verifique se a sessão está ativa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifique se o e-mail está na sessão
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Obtenha o ID do usuário com base no e-mail da sessão
    $sql_select = "SELECT id FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $sql_select);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $id_usuario = $row['id'];

        // Implemente a lógica para excluir o perfil
        $sql_delete = "DELETE FROM usuarios WHERE id = $id_usuario";

        if (mysqli_query($conn, $sql_delete)) {
            // Perfil excluído com sucesso, redirecionar para a página de login, por exemplo
            header("Location: tela-de-login.php");
            exit();
        } else {
            // Lida com erros, se houver
            echo "Erro ao excluir o perfil: " . mysqli_error($conn);
        }
    } else {
        // Lida com erros, se houver
        echo "Erro ao buscar o usuário: " . mysqli_error($conn);
    }
} else {
    // Caso o e-mail da sessão não esteja definido
    echo "E-mail não encontrado na sessão.";
}
?>
