<?php
$logado = false;

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["email"]) && $_SESSION["email"] != "") {
    $logado = true;
}
?>

<nav class="navbar">
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/style_global.css" />
    <a class="logo" href="../">SISTECCRE</a>
    <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div> <!-- Correção: Adicione o sinal de igual aqui -->
        <div class="line3"></div>
    </div>
    <ul class="nav-list">
        <?php
        if ($logado) {
            // Itens do menu para usuários logados
        ?>
            <li>
                <a href="Dados_clinicos.php">DADOS CLÍNICOS DO PACIENTE</a>
            </li>
            <li>
                <a>RELATÓRIO</a>
                <ul>
                    <li><a href="RelatorioGeral.php">RELATÓRIO GERAL</a></li>
                    <li><a href="grafico.php">GRÁFICO</a></li>
                    <li><a href="teste.php">TESTE</a></li>
                </ul>
            </li>
            <li>
                <a>CONFIGURAÇÕES</a>
                <ul>
                    <li><a href="PerfilUser.php">PERFIL DO USUÁRIO</a></li>
                    <li><a href="Suporte.php">SUPORTE</a></li>
                    <li><a href="../control/controle_logout.php">SAIR</a></li>
                </ul>
            </li>
        <?php
        } else {
            // Itens do menu para visitantes não logados
        ?>
            <ul class="nav-list not-logged-in">
                <li><a href="./view/login.php">ACESAR</a></li>
                <li><a href="./view/tela-de-cadastro.php">CADASTRAR-SE</a></li>
                <li><a href="./view/Suporte.php">SUPORTE</a></li>
            </ul>

        <?php
        }
        ?>
    </ul>
</nav>
