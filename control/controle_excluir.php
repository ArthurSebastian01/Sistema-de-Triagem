<?php
require_once "../modelo/cadastro.php";
if(isset($_GET['id'])){
    $idParaExcluir = $_GET['id'];

    $c = new Cliente();
    $c->setIdCliente($idParaExcluir);

    if($c->excluir()){
        echo "Excluído com sucesso";
    }else{
        echo "Erro ao excluir";
    }
}

?>