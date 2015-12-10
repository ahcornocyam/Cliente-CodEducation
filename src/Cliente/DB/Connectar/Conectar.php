<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 09/12/15
 * Time: 16:42
 */

namespace Cliente\DB\Connectar;


abstract class Conectar
{
    private static $dsn = "mysql:host=192.168.10.10;dbname=php_OO";
    private static $usuario ="homestead";
    private static $senha ="secret";

   private static function conectar(){
        try{
            $pdo = new \PDO( self::$dsn, self::$usuario, self::$senha );
            $pdo->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
            return $pdo;
        }catch( \PDOException $e ){
            echo "Erro ao estabelecer conexao com o banco de dados {$e->getMessage()}";
            die();
        }
    }
    public static function getConecta(){
        return self::conectar();
    }

}