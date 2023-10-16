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
            background: #228B22;
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
  <br>
  <center>
    <input type="checkbox" placeholder="sintomas[]" value="diarreia">Tem diarreia?  <input type="number" placeholder="Qual o nivel de 0-5?">
    <br><br>
    <input type="checkbox" placeholder="sintomas[]" value="constipacao">Tem constipação?  <input type="number" placeholder="Qual o nivel de 0-5?">
    <br><br>
    <input type="checkbox" placeholder="sintomas[]" value="intestino-nao-esvaziado">Tem sensação de que o intestino não é completamente esvaziado?  <input type="number" placeholder="Qual o nivel de 0-5?">
    <br><br>
    <input type="checkbox" placeholder="sintomas[]" value="sangue-nas-fezes">Tem presença de sangue nas fezes?  <input type="number" placeholder="Qual o nivel de 0-5?">
    <br><br>
    <input type="checkbox" placeholder="sintomas[]" value="dor-abdominal">Tem dor abdominal tipo cólica?  <input type="number" placeholder="Qual o nivel de 0-5?">
    <br><br>
    <input type="checkbox" placeholder="sintomas[]" value="inchaco-abdominal">Tem sensação de inchaço abdominal?  <input type="number" placeholder="Qual o nivel de 0-5?">
    <br><br>
    <input type="checkbox" placeholder="sintomas[]" value="cansaco-fadiga">Tem cansaço e fadiga?  <input type="number" placeholder="Qual o nivel de 0-5?">
    <br><br>
    <input type="checkbox" placeholder="sintomas[]" value="perda-de-peso">Tem perda de peso sem um motivo específico?  <input type="number" placeholder="Qual o nivel de 0-5?">
    <br><br>

    <br><br>
    <button onclick="enviarRequisicao()">Enviar</button>
    <p id="mensagem-envio" style="display: none; color: black;">Ficha enviada com sucesso</p>
  </center>
</div>
<script>
    function enviarRequisicao() {
        var mensagemEnvio = document.getElementById("mensagem-envio");
        mensagemEnvio.style.display = "block";

        setTimeout(function() {
            window.location.href = "tela-principal.html";
        }, 2000);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
