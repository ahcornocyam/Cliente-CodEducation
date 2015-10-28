<?php
$id = $_GET['cliente'];

$cliente  = $clientes->getCrud()->pesquisaCliente($id);
?>
<div class="row">
    <header class="col-md-12 well">
        <h1 class="text-center">Descrição do Cliente <?=$cliente->getNome()." ".$cliente->getSobrenome()." Cliente ".$cliente->getEstrela()." estrela(s)"?></h1>
    </header>
</div>
<div class="row">
    <main class="col-md-offset-3 col-md-6 col-md-offset-3">
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Idade:</i> <?=$cliente->getIdade();?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Tipo :</i> <?=$cliente->getTipo();?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">CPF/CNPJ:</i> <?=($cliente->getTipo() == "pessoa fisica")?$cliente->getCpf() : $cliente->getCnpj()?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Endereco:</i> <?=$cliente->getEndereco();?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Endereço para cobrança:</i> <?=$cliente->getEnderecoCobranca();?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">E-mail:</i>: <?=$cliente->getEmail();?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Fone:</i> <?=$cliente->getFone();?></p>
        </div>
        <div>
            <a href="index.php" class="btn btn-default btn-primary">Voltar</a>
        </div>
    </main>
</div>