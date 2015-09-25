<?php
require_once('Connection.php');
class TiposClientes
{
    public function getTipoCliente($lnTipoCliente)
    {
        $loConnection = new Connection();
        $stmt = $loConnection->prepare('SELECT * FROM tiposClientes WHERE tipoCliente = ' . $lnTipoCliente);
        return reset($stmt->fetchAll());
    }

    public function getTiposClientes()
    {
        $loConnection = new Connection();
        $stmt = $loConnection->prepare('SELECT * FROM tiposClientes WHERE status <> 0');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}