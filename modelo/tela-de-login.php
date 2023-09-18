<?php
session_start(); // Inicie a sessão para acessar variáveis de sessão

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tela de login</title>

    <style>
        body{
            font-size: 20px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-family:fantasy;
            background: #0ea1338a;
            background-size: cover;
            height: 100vh;
        }
        div{
            position: absolute;
            top: 38%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: black;
            height: 60vh;
            
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            opacity: 0.6;
        }
        button{
            background-color: #2E8B57;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
            
        }
        button:hover{
            background-color:green;
            cursor: pointer;
        }
        .mensagem-de-erro {
            text-align: center; /* Centraliza o texto horizontalmente */
            margin-top: 20px; /* Espaço superior para espaçamento */
            color: red; /* Cor do texto de erro (altere conforme necessário) */
            font-weight: bold; /* Pode tornar o texto em negrito para maior destaque */
        }        
    </style>
</head>
<body>
    <div>
        <h1><center>Acesso</center></h1>
        <form method="POST" action="BuscarUsuarios.php">
            <input type="email" placeholder="E-mail" name="email" required>
            <br><br>
            <input type="password" placeholder="Senha" name="senha" required>
            <br><br>
            <button type="submit">Acessar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
