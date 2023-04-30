<?php
    if(!isset($_SESSION)){
        session_start();
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
            background: url("../img/Fundo.jpg") no-repeat center center;
            background-size: cover;
            height: 97vh;
        }
        div{
            position: absolute;
            top: 38%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: black;
            height: 65vh;
            
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
    </style>
</head>
<body>
    <!-- Mensagem de erro -->
    <p>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Acesso negado</div>
        <div class="card-body">
            <h5 class="card-title">Email ou senha inválidos</h5>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
    </div>
    <?php
    if(isset($_SESSION['nao_logado'])):
    ?>
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Acesso negado</div>
        <div class="card-body">
            <h5 class="card-title">Você precisa estar autenticado para acessar</h5>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_logado']);
        ?>
    </div>
        <?php
        if(isset($_SESSION['emBranco'])):
        ?>
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Preencha todos os campos corretamente</h5>
            </div>
        <?php
        endif;
        unset($_SESSION['emBranco']);
        ?>
    </div>
    </p>
    <!-- Fim mensagem de erro -->
    <div>
        <h1><center>Login</center></h1>
            <input type="email" placeholder="E-mail" name="email">
            <br><br>
            <input type="password" placeholder="Senha" name="senha">
            <br><br>
            <form action="tela-principal.html">
            <button type="submit">Enviar</button>
            </form>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>