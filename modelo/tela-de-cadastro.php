<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tela de cadastro</title>
    <style>
        body{
            font-size: 20px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-family:fantasy;
            background: url("img/Fundo.jpg") no-repeat center center;
            background-size: cover;
            height: 97vh;
        }
        div{
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: black;
            height: 55vh;
            
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
            width: 87%;
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
    <div>
        <h1><center>Cadastrar</center></h1>
        <form action="control/controle_cadastro.php" method="post">
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="text" placeholder="Sobrenome">
        <br><br>
        <input type="text" placeholder="E-mail">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <form action="ficha_anamnese.php">
        <button type="submit">Cadastrar</button>
        </form>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>