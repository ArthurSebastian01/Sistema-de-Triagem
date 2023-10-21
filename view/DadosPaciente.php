<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dados do Paciente</title>
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
            top: 20%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: black;
            height: 55vh;
            
        }
        input, select, textarea {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            opacity: 0.6;
            width: 100%;
        }
        button{
            background-color: #2E8B57;
            border: none;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
            
        }
        button:hover{
            background-color:green;
            cursor: pointer;
        }
        btn-deletar {
            background-color: #DC3545; /* Cor vermelha para ação de deletar */
        }
    </style>
</head>
<body>
<div>
  <h1><center>Perfil do usuario</center></h1>
    <input type="Nome" placeholder="Nome" name="Nome">
    <br>
    <input type="Sobrenome" placeholder="Sobrenome" name="Sobrenome">
    <br>
    <input type="email" placeholder="E-mail" name="email">
    <br>  
    <input type="Idade" placeholder="Idade" name="Idade">
    <br>
    <input type="Sexo" placeholder="Sexo" name="Sexo">
    <br>
    <input type="Telefone" placeholder="Telefone" name="Telefone">
    <br><br>
    <center><button type="submit" class="btn btn-primary">Atualizar Perfil</button></center>
    <center><button type="submit" class="btn btn-deletar">Deletar Perfil</button></center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
