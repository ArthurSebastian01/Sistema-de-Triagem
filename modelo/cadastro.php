<?php
include "conexao_bd.php";
class Cliente
{
    private $idCliente;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    private $nascimento;
    private $salario;
    private $banco;
    function __construct()
    {
        $this->banco = new Banco();
    }
    public function cadastrar(){
        $nome       = $this->getNome();
        $nome       = $this->getSobrenome();
        $email      = $this->getEmail();
        $senha      = $this->getSenha();
        $stmt       = $this->banco->getConexao()->prepare("insert into Cliente (nome, sobrenome, email,senha)values(?,?,?,?)");
        $stmt->bind_param(
            "sssss",
            $nome,
            $sobrenome,
            $email,
            $senha 
        );
        return $stmt->execute();
    }
    public function excluir()
    {
        $id= $this->getIdCliente();
        $stmt = $this->banco->getConexao()->prepare("delete from Cliente where idCliente = ?");
        $stmt->bind_param("i",  $id );
        return $stmt->execute();
    }

    public function atualizar()
    {
        $nome       = $this->getNome();
        $nome       = $this->getSobrenome();
        $email      = $this->getEmail();
        $senha      = $this->getSenha();
        $id= $this->getIdCliente();
        $stmt = $this->banco->getConexao()->prepare("update cliente 
                                    set nome=?,
                                    set sobrenome=?,  
                                    email=?,
                                    senha=?,
                                    where idCliente = ?");
        $stmt->bind_param("ssssi", $nome , $sobrenome, $email, $senha, $id);
        return $stmt->execute();
    }
    public function buscarClientePorId($id)
    {
        $stmt = $this->banco->getConexao()->prepare("select * from cliente where idCliente = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($linha = $resultado->fetch_object()) {
            $this->setIdCliente($linha->idCliente);
            $this->setNome($linha->nome);
            $this->setSobrenome($linha->sobrenome);
            $this->setEmail($linha->email);
            $this->setSenha($linha->senha);
        }
        return $this;
    }
    public function listarClientes()
    {
        $stmt = $this->banco->getConexao()->prepare("Select * from Cliente");
        $stmt->execute();
        $result = $stmt->get_result();
        $vetorClientes = array();
        $i = 0;
        while ($linha = mysqli_fetch_object($result)) {
            $vetorClientes[$i] = new Cliente();
            $vetorClientes[$i]->setIdCliente($linha->idCliente);
            $vetorClientes[$i]->setNome($linha->nome);
            $vetorClientes[$i]->setSobrenome($linha->sobrenome);
            $vetorClientes[$i]->setEmail($linha->email);
            $vetorClientes[$i]->setSenha($linha->senha);
            $i++;
        }
        return $vetorClientes;
    }
    public function getIdCliente()
    {
        return  $this->idCliente;
    }
    public function setIdCliente($v)
    {
        $this->idCliente = $v;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($v)
    {
        $this->email = $v;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($v)
    {
        $this->senha = $v;
    }
}