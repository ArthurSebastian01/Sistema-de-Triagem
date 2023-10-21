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
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style_global.css">
    <title>Tela de login</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Login</h1>
            <form method="POST" action="../control/BuscarUsuarios.php"> 
                <input type="email" placeholder="E-mail" name="email" required>
                <input type="password" placeholder="Senha" name="senha" required>
                <button type="submit">Acessar</button>
            </form>
        </div>
    </div>
</body>
</html>
