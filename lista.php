<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th>
                <a class="btn btn-link" href="?ordem=<?= $ordem ?>">Id</a>
                <span class="<?=$class?>"></span>
            </th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Idade</th>
            <th>Classificação do Cliente</th>
            <th>Tipo</th>
            <th>CPF</th>
            <th>Endereco</th>
            <th>Email</th>
            <th>Fone</th>
            <th>Endereco de Cobrança</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($lista as $cliente):?>
            <tr class="trClick">
                <td data-id="<?=$cliente->getId()?>"><?=$cliente->getId()?></td>
                <td><?=$cliente->getNome()?></td>
                <td><?=$cliente->getSobrenome()?></td>
                <td><?=$cliente->getIdade()?></td>
                <td><?=$cliente->getEstrela()." estrelas"?></td>
                <td><?=$cliente->getTipo()?></td>
                <td><?=$cliente->getDocumento()?></td>
                <td><?=$cliente->getEndereco()?></td>
                <td><?=$cliente->getEmail()?></td>
                <td><?=$cliente->getFone()?></td>
                <td><?=$cliente->getEnderecoCobranca()?></td>
            </tr>
        <?php endforeach ?>
        </tbody>

        <tfoot class="text-center">
        <tr>
            <td colspan="8">Temos registrados <?=TOTALCLIENTES?> Clientes</td>
        </tr>
        </tfoot>
    </table>
</div>