<?php
    include_once ("./components/navbar.php");
    include_once ("../control/BuscarPerfil.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfiluser.css">
    <link rel="stylesheet" href="../css/style_global.css">
    <title>PERFIL DO USUARIO</title>
</head>
<body>
<div class="container">
  <div class="content">
    <form method="POST" action="../control/AlterarPerfil.php">
    <h1>PERFIL DO USUARIO</h1>
        <label>
            <span>Nome: </span>
            <input type="text" placeholder="Nome" name="Nome" value="<?php echo $nome; ?>">
        </label>
        
        <label>
            <span>Sobrenome:</span>
            <input type="text" placeholder="Sobrenome" name="Sobrenome" value="<?php echo $sobrenome; ?>">
        </label>
        
        <label>
            <span>Email:</span>
            <input type="email" placeholder="E-mail" name="email" value="<?php echo $email; ?>">
        </label>
        
        <label>
            <span>Idade:</span>
            <input type="number" placeholder="Idade" name="Idade" value="<?php echo $idade; ?>">
        </label>
        
        <label>
            <span>Sexo:</span>
            <input type="text" placeholder="Sexo" name="Sexo" value="<?php echo $sexo; ?>">
        </label>
        
        <label>
            <span>Telefone:</span>
            <input type="text" placeholder="Telefone" name="Telefone" value="<?php echo $telefone; ?>">
        </label>
        <button type="submit" class="btn_atualizar">Atualizar</button>
    </form>
    <button class="btn_deletar"><a href="confirmar_exclusao.php">Deletar Perfil</a></button>
  </div>
</div>
</body>
</html>
