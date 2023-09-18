<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ficha de Anamnese</title>
    <style>
        body{
            font-size: 20px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-family:fantasy;
            background: #0ea1338a;
            background-size: cover;
            height: 101vh;
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
        }
        button{
            background-color: #2E8B57;
            border: none;
            padding: 15px;
            width: 30%;
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
<div>
  <h1><center>Ficha de Anamnese</center></h1>
  <center>
  <form action="tela-principal.html" method="POST">

    <button type="submit" onclick="validarCampos()" >Enviar</button>
    <p id="mensagem-erro" style="display: none; color: red;">Preencha todos os campos obrigatórios</p>
  </center>
</div>
<script>
    function validarCampos() {
        var nomeCompleto = document.getElementById("nomeCompleto").value;
        var idade = document.getElementById("idade").value;
        var genero = document.getElementById("genero").value;
        var queixa = document.getElementById("queixa").value;

        if (nomeCompleto === '' || idade === '' || genero === '' || queixa === '') {
            var mensagemErro = document.getElementById("mensagem-erro");
            mensagemErro.style.display = "block";
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
