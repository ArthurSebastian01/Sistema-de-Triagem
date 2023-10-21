<?php
// Inclua a conexão com o banco de dados
include "conexao_bd.php";

// Recupere os dados do formulário
$nome = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$email = $_POST['email'];
$idade = $_POST['Idade'];
$sexo = $_POST['Sexo'];
$telefone = $_POST['Telefone'];

// Consulta SQL para atualizar os dados do usuário (substitua 'ID_DO_USUARIO' pelo ID do usuário correto)
$idUsuario = 'ID_DO_USUARIO';
$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade', sexo = '$sexo', telefone = '$telefone' WHERE email = '$email'";

if (mysqli_query($conn, $sql)) {
    // Os dados foram atualizados com sucesso
    header("Location:../view/PerfilUser.php");
    exit();
} else {
    // Lida com erros, se houver
    echo "Erro ao atualizar dados do perfil: " . mysqli_error($conn);
}
?>
