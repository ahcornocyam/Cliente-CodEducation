<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 09/12/15
 * Time: 17:10
 */

namespace Cliente\DB\Tabela;


use Cliente\DB\Connectar\Conectar;

class CriarDB
{
    private $tabela;
    private $dbName;
    /**
     * CriarDB constructor.
     * @param $tabela
     */
    public function __construct( $dbName, $tabela )
    {
        $this->tabela = $tabela;
        $this->dbName = $dbName;
        $this->criarDB();
    }


    public function criarDB(){
        $pdo = Conectar::getConecta();
        try{
            $pdo->beginTransaction();
            $pdo->query( "CREATE DATABASE IF NOT EXISTS {$this->dbName} " );
            $pdo->query( "use {$this->dbName} " );
            $tabela = "CREATE TABLE IF NOT EXISTS {$this->tabela}( ";
            $tabela .= "id INT(11) AUTO_INCREMENT NOT NULL, ";
            $tabela .= "nome VARCHAR(25) NOT NULL, ";
            $tabela .= "sobrenome VARCHAR(50) NOT NULL, ";
            $tabela .= "idade INT(11) NOT NULL, ";
            $tabela .= "endereco VARCHAR(200) NOT NULL, ";
            $tabela .= "fone VARCHAR(13) NOT NULL, ";
            $tabela .= "email VARCHAR(50) NOT NULL, ";
            $tabela .= "cpf_cnpj VARCHAR(14) NOT NULL, ";
            $tabela .= "tipo VARCHAR(25) NOT NULL, ";
            $tabela .= "estrela INT(11) NOT NULL, ";
            $tabela .= "enderecoCobranca VARCHAR(200) NOT NULL, ";
            $tabela .= "PRIMARY KEY (`id`) ); ";
            $pdo->exec($tabela);

            $pdo->commit();
        }catch ( \PDOException $e ){

            echo "Não é possivel criar o banco de dados";
            die( "Código: {$e->getCode()}, Menagem: {$e->getMessage()}" );
        }
        return $pdo;
    }
}