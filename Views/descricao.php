<?php
$id = $_GET['cliente'];

$cliente  = $clientes->umaPessoa( $id );

?>
<div class="row">
    <header class="col-md-12 well">
        <h1 class="text-center">Descrição do Cliente <?=$cliente->nome." ".$cliente->sobrenome." Cliente ".$cliente->estrela." estrela(s)"?></h1>
    </header>
</div>
<div class="row">
    <main class="col-md-offset-3 col-md-6 col-md-offset-3">
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Idade:</i> <?=$cliente->idade?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Tipo :</i> <?=$cliente->tipo?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">CPF/CNPJ:</i> <?=$cliente->cpf_cnpj?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Endereco:</i> <?=$cliente->endereco?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Endereço para cobrança:</i> <?=$cliente->enderecoCobranca?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">E-mail:</i>: <?=$cliente->email?></p>
        </div>
        <div>
            <p class="panel panel-default panel-body"><i class="text-uppercase text-primary">Fone:</i> <?=$cliente->fone?></p>
        </div>
        <div>
            <a href="../../index.php" class="btn btn-default btn-primary">Voltar</a>
        </div>
    </main>
</div>