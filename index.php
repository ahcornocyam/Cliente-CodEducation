<?php
    require_once "bootstrap/autoload.php";


    use Cliente\CRUD\ClienteList as lista;
    define('CLASS_VIEWS',__DIR__ . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR);
    $clientes = new lista();

    (!isset($_GET['cliente']) || $_GET['cliente'] < 0)? $includePg = CLASS_VIEWS."lista.php" : $includePg = CLASS_VIEWS."descricao.php";

    if (!isset($_GET['ordem']) || $_GET['ordem'] == 1) {
        $_GET['ordem'] = $ordem = 0;
        $class = "glyphicon glyphicon-sort-by-order";
        $clientes->getCrud()->ordemCrescente();
    } elseif ($_GET['ordem'] == 0) {
        $_GET['ordem'] = $ordem = 1;
        $class = "glyphicon glyphicon-sort-by-order-alt";
        $clientes->getCrud()->ordemDecrescente();
    }
    $lista = $clientes->getCrud()->listaClientes();
    define("TOTALCLIENTES", count($lista));
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--            CSS         -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <title>Clientes M.A.R Investimentos</title>
    </head>
    <body>
        <!-- Conteudo -->
        <div class="conteiner-fluid">
            <div class="row">
                <!-- Header -->
                <header class="col-md-12 panel">
                    <h1 class="text-center">Clientes M.A.R Investimentos</h1>
                </header>
            </div>
            <div class="row">
                <!-- Main -->
                <main class="col-md-offset-1 col-md-10 col-md-offset-1 panel panel-body">
                    <?php include $includePg?>
                </main>
            </div>
            <div class="row">
                <!-- Footer -->
                <footer class="col-md-12 panel panel-footer">
                    <h6 class="text-center"> Todos os direitos reservados a mim.</h6>
                </footer>
            </div>
        </div>
        <!--            JavaScript          -->
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>