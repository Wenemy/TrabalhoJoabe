<?php
require_once('Connection.php');
class Clientes
{
    public function getClientes()
    {
        $loConnection = new Connection();
        $stmt = $loConnection->prepare('SELECT * FROM clientes WHERE status <> 0');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function setCliente(array $laCliente)
    {
        $loConnection = new Connection();
        $stmt = $loConnection->prepare('INSERT INTO clientes(nome,cpf,tipoCliente,ativo,status) VALUES ("'.$laCliente['nome'].'","'.$laCliente['cpf'].'","'.$laCliente['tipoCliente'].'",1,1)');
        $stmt->execute();
        header('location:index.php');
    }
}