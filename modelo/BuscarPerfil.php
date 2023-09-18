<?php
// Inclua o arquivo de conexão com o banco de dados
include_once "conexao_bd.php";

// Consulta SQL para recuperar as informações do usuário com base em algum critério, como ID ou email
// Substitua 'SEU_CRITERIO' pelo critério desejado
$sql = "SELECT Nome, Sobrenome, email, Idade, Sexo, Telefone FROM ficha WHERE email = 'maria@example.com'";


    // Execute a consulta
    if ($stmt->execute()) {
        // Associe as colunas do resultado a variáveis
        $stmt->bind_result($nome, $sobrenome, $email, $idade, $sexo, $telefone);

        // Busque o resultado
        $stmt->fetch();

        // Feche a declaração preparada
        $stmt->close();
    } else {
        // Trate erros na execução da consulta, se necessário
        echo "Erro ao executar a consulta.";
    }

// Feche a conexão com o banco de dados
$conn->close();
?>
