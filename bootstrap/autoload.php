<?php
#constante que pega onde está localizado nossos codigos fontes;
define('CLASS_DIR',__DIR__ . DIRECTORY_SEPARATOR . '../src' . DIRECTORY_SEPARATOR);
#criando autoload
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function($className){
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = CLASS_DIR . $path . '.php';
    if (is_file($file)) {
        require_once($file);
    } else {
        throw new \ErrorException("Could not load class {$className}. File not found: {$file}");
        die();
    }
});

use Cliente\CRUD\CrudCliente as lista;

define('CLASS_VIEWS',__DIR__ . DIRECTORY_SEPARATOR . '../Views' . DIRECTORY_SEPARATOR);

$db = new \Cliente\DB\Tabela\CriarDB( "php_OO", "pessoas" );
$cadastrarPessoas = new \Cliente\CRUD\Fixtures("pessoas");

$clientes = new lista( \Cliente\DB\Connectar\Conectar::getConecta() );

( !isset( $_GET['cliente'] ) || $_GET['cliente'] < 0 )? $includePg = CLASS_VIEWS."lista.php" : $includePg = CLASS_VIEWS."descricao.php";

if ( !isset( $_GET['ordem'] ) || $_GET['ordem'] == 1) {
    $_GET['ordem'] = $ordem = 0;
    $class = "glyphicon glyphicon-sort-by-order";
   $lista= $clientes->todasPessoas("ASC");
} elseif ( $_GET['ordem'] == 0 ) {
    $_GET['ordem'] = $ordem = 1;
    $class = "glyphicon glyphicon-sort-by-order-alt";
    $lista = $clientes->todasPessoas("DESC");
}


define( "TOTALCLIENTES", count( $lista ) );