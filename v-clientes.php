<? require('TiposClientes.php') ?>
<? require('Clientes.php') ?>
<? $loTiposClientes = new TiposClientes(); ?>
<? $loClientes = new Clientes(); ?>
<?
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $loClientes->setCliente($_POST);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Trabalho</title>
</head>
<body>
<h1>Trabalho Joabe</h1>
<form action="" method="POST">
    <fieldset>
        <label>Nome:</label>
        <input type="text" value="" id="nome" name="nome" />
        <br/><br/>
        <label>CPF:</label>
        <input type="text" value="" id="cpf" name="cpf" />
        <br/><br/>
        <? $laTiposClientes = $loTiposClientes->getTiposClientes() ?>
        <label>Tipo Cliente:</label>
        <select id="tipoCliente" name="tipoCliente">
            <? if(!empty($laTiposClientes)): ?>
                <? foreach($laTiposClientes as $laTipoCliente): ?>
                    <option value="<?=$laTipoCliente['tipoCliente']?>"><?=$laTipoCliente['descricao']?></option>
                <? endforeach; ?>
            <? else: ?>
                    <option value="0">Nenhum cadastrado.</option>
            <? endif; ?>
        </select>
    </fieldset>
    <input type="submit" value="GRAVAR" />
</form>
</body>
</html>