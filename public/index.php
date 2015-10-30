<?php
    require_once "../bootstrap/autoload.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--            CSS         -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

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
                <main class="col-lg-12 panel panel-body">
                    <?php include $includePg ?>
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
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>