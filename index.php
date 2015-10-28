<?php
    require_once "autoload.php";
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