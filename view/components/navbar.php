<?php
    $logado = false;
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(isset($_SESSION["email"]) && $_SESSION["email"] != ""){
        $logado = true;
    }
?>
<nav class="navbar">
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/style_global.css" />
    <a class="logo" href="../">SISTECCRE</a>
    <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="nav-list">
        <?php
        if($logado){
            ?>
            <li>
            <a href="FichaAnamnese.php">Dados clínicos do paciente</a>
        </li>
        <li>
            <a>Relatório</a>
            <ul>
              <li><a href="RelatorioGeral.php">Relatorio Geral</a></li>
              <li><a href="grafico.php">Gráfico</a></li>
            </ul>
        </li>
        <li><a>Configurações</a>
            <ul>
                <a href="PerfilUser.php">Perfil do Usuario</a></button>
                <li><a href="Suporte.php">Suporte</a></li>
                <li><a href="../control/controle_logout.php">Sair</a></li>
            </ul>
        </li>
    
        <?php
            }
            else{
        ?>
            <li><a href="./view/login.php">Acessar</a></li>
            <li><a href="./view/tela-de-cadastro.php">Cadastar-se</a></li>
        <?php
            }
        ?>
        
        
    </ul>
</nav>