<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-header-font">
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
            <th>CPF/CPNJ</th>
            <th>Endereco</th>
            <th>Email</th>
            <th>Fone</th>
            <th>Endereco de Cobrança</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach( $lista as $cliente ):?>
            <tr class="trClick">
                <td data-id="<?= $cliente-> id ?>"><?= $cliente-> id ?></td>
                <td><?= $cliente->nome ?></td>
                <td><?= $cliente-> sobrenome ?></td>
                <td><?= $cliente-> idade ?></td>
                <td><?= $cliente-> estrela." estrelas" ?></td>
                <td><?= $cliente-> tipo ?></td>
                <td><?= $cliente-> cpf_cnpj ?></td>
                <td><?= $cliente-> endereco ?></td>
                <td><?= $cliente-> email ?></td>
                <td><?= $cliente-> fone ?></td>
                <td><?= $cliente-> enderecoCobranca ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>

        <tfoot class="text-center">
        <tr>
            <td colspan="8">Temos registrados <?= TOTALCLIENTES ?> Clientes</td>
        </tr>
        </tfoot>
    </table>
</div>