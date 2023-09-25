<?php
// Inclua o arquivo de conexão com o banco de dados
include_once "conexao_bd.php";

// Consulta SQL para recuperar as informações do usuário com base em algum critério, como ID ou email
// Substitua 'SEU_CRITERIO' pelo critério desejado
$sql = "SELECT nome, sobrenome, email, idade, sexo, telefone FROM usuarios WHERE id = 1"; // Altere para corresponder ao ID do usuário desejado
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    // Recupere os dados do usuário
    $dadosUsuario = mysqli_fetch_assoc($resultado);

    // Atribua os valores às variáveis
    $nome = $dadosUsuario['nome'];
    $sobrenome = $dadosUsuario['sobrenome'];
    $email = $dadosUsuario['email'];
    $idade = $dadosUsuario['idade'];
    $sexo = $dadosUsuario['sexo'];
    $telefone = $dadosUsuario['telefone'];
} else {
    // Lida com erros, se houver
    echo "Erro ao recuperar os dados do usuário: " . mysqli_error($conn);
}
?>
