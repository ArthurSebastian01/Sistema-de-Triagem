<?php
 include "modelo/cadastro.php";
 $idCliente = $_GET['id'];
 $cliente = new Cliente();
 $cliente = $cliente->buscarClientePorId($idCliente);
 $idCliente  = $cliente->getIdCliente();
 $nome       = $cliente->getNome();
 $sobrenome  = $cliente->getSobrenome();
 $email      = $cliente->getEmail();
 $senha      = $cliente->getSenha();
?>
<html>
    <head></head>
    <body>
        <form action="controle/controle_atualizar.php" method="post">
            <input type="hidden" name="txtIdCliente" value="<?php echo  $idCliente;?>"><br>
            <input type="text" name ="txtNome" value="<?php echo $nome;?>"><br>
            <input type="text" name ="txtSobrenome" value="<?php echo $sobrenome;?>"><br>
            <input type="text" name ="txtEmail" value="<?php echo $email;?>"><br>
            <input type="password" name ="txtSenha" value="<?php echo $senha;?>"><br>
            <input type="submit" value="Salvar Alterações">
        </form>
    </body>
</html>