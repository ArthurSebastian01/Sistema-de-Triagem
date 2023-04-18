<?php 

include "../modelo/cadastro.php";
$cliente = new Cliente();
$vetorClientes = $cliente->listarClientes();
$qtdClientes = count($vetorClientes);
$i=0;
$tabela="<table border='1'>";
while($i<$qtdClientes){
   $id= $vetorClientes[$i]->getIdCliente();
   $tabela.="<tr>";
   $tabela.="<td>".$vetorClientes[$i]->getNome()."</td>";
   $tabela.="<td>".$vetorClientes[$i]->getSobrenome()."</td>";
   $tabela.="<td>".$vetorClientes[$i]->getEmail()."</td>";
   $tabela.="<td>".$vetorClientes[$i]->getSenha()."</td>";
   $tabela.="<td><a href='../AlterarDados.php?id=$id'>alterar</a></td>";
   $tabela.="<td><a href='controle_excluir.php?id=$id'>excluir</a></td>";
   $tabela.="</tr>";
   $i++;
}
$tabela.="</table>";
echo $tabela;
?>
