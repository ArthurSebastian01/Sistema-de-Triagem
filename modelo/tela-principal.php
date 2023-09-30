<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tela Principal</title>
    <link rel="stylesheet" href="../css/style.css" />
    <style>
      /* Adicione este estilo para o menu suspenso */
      .nav-list li {
        position: relative;
        display: inline-block;
        margin-left: 30px;
      }

      /* Estilo para o menu suspenso */
      .nav-list li ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #2E8B57;
        border: 1px solid #ddd;
        padding: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }

      /* Estilo para os itens do menu suspenso */
      .nav-list li ul li {
        display: block;
        margin: 5px 0;
      }

      /* Mostra o menu suspenso quando passa o mouse */
      .nav-list li:hover ul {
        display: block;
      }
    </style>
  </head>

  <body>
    <header>
      <nav>
        <a class="logo" href="/">Seja Bem Vindo</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li>
            <a href="Dados_clinicos.php">Dados clínicos do paciente</a>
          </li>
          <li>
            <a>Relatório</a>
            <!-- Menu suspenso para "Relatório" -->
            <ul>
              <li><a href="RelatorioGeral.php">Relatorio Geral</a></li>
              <li><a href="grafico.html">Gráfico</a></li>
            </ul>
          </li>
          <li><a>Configurações</a>
            <ul>
            <a href="PerfilUser.php">Perfil do Usuario</a></button>
              <li><a href="Suporte.php">Suporte</a></li>
              <li><a href="../control/controle_logout.php">Sair</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    <main></main>
    <script src="mobile-navbar.js"></script>
  </body>
</html>
