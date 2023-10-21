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
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/suporte.css">
    <link rel="stylesheet" href="../css/style_global.css">
    <title>Suporte Online</title>
</head>
<body>
<div class="container">
        <div class="content">
            <h1>Suporte Online</h1>
            <form method="post" action="../control/SuporteBD.php">
                <select id="requisicao" name="requisicao" type="text" placeholder="Requisição" required>
                    <option value="">Tipo de requisição</option>
                    <option value="Cadastro">Cadastro</option>
                    <option value="Anamnese">Ficha de Anamnese</option>
                    <option value="Grafico">Gráfico</option>
                    <option value="Outros">Outros</option>
                </select>
                <br>
            <textarea id="mensagem" name="mensagem" style="color: black;" placeholder="Requisição" rows="3" cols="32" required></textarea>
           <br>
            <button type="submit" name="enviarRequisicao">Enviar requisição</button>
            </form>
        </div>
    </div>
</body>
</html>

