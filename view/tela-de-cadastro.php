<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Verifique se a variável de sessão mensagem_erro está definida
if (isset($_SESSION['mensagem_erro'])) {
    echo $_SESSION['mensagem_erro'];
    unset($_SESSION['mensagem_erro']); // Limpe a variável de sessão
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/style_global.css">
    <title>Tela de cadastro</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>CADASTRO</h1>
            <form method="POST" action="../control/CadastrarUsuario.php"> 
                <input type="text" placeholder="Nome" name="nome" required>
                <input type="text" placeholder="Sobrenome" name "sobrenome" required>
                <input type="email" placeholder="E-mail" name="email" required>
                <input type="text" placeholder="Idade" name="idade">
                <input type="text" placeholder="Telefone" name="telefone">
                <input type="text" placeholder="Sexo" name="sexo">
                <input type="password" placeholder="Senha" name="senha" required>
                <input type="password" placeholder="Confirmar senha" name="confirmar_senha" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>

