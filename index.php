<? require('Clientes.php') ?>
<? require('TiposClientes.php') ?>
<? $loClientes = new Clientes(); ?>
<? $laClientes = $loClientes->getClientes(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Trabalho</title>
</head>
<body>
<h1>Trabalho Joabe</h1>
<a href="/v-clientes.php">Novo Cliente</a>
<table>
    <thead>
    <tr>
        <th>Cliente</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Tipo Cliente</th>
    </tr>
    </thead>
    <tbody>
    <? $loTiposClientes = new TiposClientes(); ?>
    <? if(!empty($laClientes)): ?>
        <? foreach($laClientes as $laCliente): ?>
            <? $laTipoCliente = $loTiposClientes->getTipoCliente($laCliente['tipoCliente']); ?>
            <tr>
                <td><?=$laCliente['cliente']?></td>
                <td><?=$laCliente['nome']?></td>
                <td><?=$laCliente['cpf']?></td>
                <td><?=!empty($laTipoCliente['descricao']) ? $laTipoCliente['descricao'] : "...";?></td>
            </tr>
        <? endforeach; ?>
    <? endif; ?>
    </tbody>
</table>
</body>
</html>