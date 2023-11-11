<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include_once("./components/navbar.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tela Principal</title>
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="../css/style_global.css" />
  <style>
  .post-it {
    width: 720px;
    height: 550px;
    background-color: #e5f7e3;
    padding: 15px;
    border: 2px solid #a3d9a5;
    border-radius: 10px;
    position: relative;
    font-family: 'Courier New', Courier, monospace;
    color: #000;
    line-height: 1.4;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    transform: rotate(5deg);
    margin-top: 35px;
  }

  .needle {
    width: 10px;
    height: 10px;
    background-color: #6e3226;
    border-radius: 50%;
    top: 10px;
    left: 22px; /* Ajustado para a lateral esquerda */
    position: absolute;
    box-shadow: inset -1px -1px 2px rgba(0, 0, 0, 0.5);
  }

  .larger-needle {
    width: 20px;
    height: 20px;
    background-color: red;
    border-radius: 50%;
    top: 5px;
    left: 17px; /* Ajustado para a lateral esquerda */
    position: absolute;
  }

  .post-it p {
    font-size: 14px; /* Ajustado para um tamanho legível */
    margin-top: 10px; /* Espaçamento superior do texto */
  }
</style>

</head>
<body>
<div class="container">
    <div class="content">
      <div class="post-it" id="myPostIt">
        <div class="larger-needle"></div>
        <div class="needle"></div>
        <p>
          <center>Riscos associados ao câncer colorretal incluem:</center><br><br>
          <ul>
            <li>Idade: O risco aumenta com a idade, sendo mais comum em pessoas com mais de 50 anos.</li>
            <li>História familiar: Pessoas com parentes de primeiro grau (pais, irmãos, filhos) que tiveram câncer colorretal têm um risco aumentado.</li>
            <li>Polipose adenomatosa familiar (FAP): Uma condição genética rara que aumenta significativamente o risco de desenvolver câncer colorretal.</li>
            <li>Síndrome de Lynch: Outra condição genética que aumenta o risco de câncer colorretal e de outros tipos de câncer.</li>
            <li>Dieta: Uma dieta rica em gorduras saturadas e pobre em fibras, frutas e vegetais pode aumentar o risco.</li>
            <li>Tabagismo e consumo excessivo de álcool: Esses fatores de estilo de vida podem contribuir para o aumento do risco.</li>
            <li>Inflamação intestinal crônica: Condições como doença de Crohn e colite ulcerativa estão associadas a um risco aumentado.</li>
            <li>Obesidade: Está ligada a um maior risco de câncer colorretal.</li>
            <li>Sedentarismo: A falta de atividade física regular pode aumentar o risco.</li>
          </ul>
        </p>
      </div>
    </div>
  </div>
</body>
</html>