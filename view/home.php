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
  </head>
  <body>
    <div class="container">
      <div class="content">
        <p>O câncer colorretal, também conhecido como câncer de cólon ou câncer de intestino, é um tipo de câncer que se desenvolve no cólon (parte do intestino grosso) ou no reto. É um dos cânceres mais comuns em todo o mundo. O câncer colorretal ocorre quando as células do revestimento do cólon ou do reto sofrem mutações e começam a se multiplicar descontroladamente.</p>
        <p>Riscos associados ao câncer colorretal incluem:</p>
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
      </div>
    </div>
  </body>
</html>
