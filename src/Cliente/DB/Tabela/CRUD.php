<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 09/12/15
 * Time: 16:59
 */

namespace Cliente\DB\Tabela;

use Cliente\DB\Connectar\Conectar as Conectar;
use Cliente\Pessoa\PessoaAbstract;

class CRUD extends Conectar
{

    public function consultarTodos( $tabela, $ordem ){

        $pdo =  self::getConecta();
        try{

            $consulta =  $pdo->prepare( "SELECT * FROM {$tabela} ORDER BY id {$ordem}" );
            $consulta->execute();
            return $consulta->fetchAll( \PDO::FETCH_OBJ );

        }catch ( \PDOException $e ){

            echo "Não é possivel fazer a listagem dos dados";
            die( "Código: {$e->getCode()}, Menagem: {$e->getMessage()}" );

        }
    }

    public function consultar( $tabela, $id ){
        $pdo = self::getConecta();
        try{

            $consulta =  $pdo->prepare( "SELECT * FROM {$tabela}".
                        " WHERE {$tabela}.id = :id" );
            $consulta->bindParam( ":id", $id );
            $consulta->execute();
            return $consulta->fetch( \PDO::FETCH_OBJ );

        }catch ( \PDOException $e ){

            echo "Não é possivel fazer a listagem dos dados";
            die( "Código: {$e->getCode()}, Menagem: {$e->getMessage()}" );

        }
    }

    public function cadastrar( $tabela, PessoaAbstract $pessoa ){

        $pdo = self::getConecta();
        try{

            $pdo->beginTransaction();
            $cadastra  =  $pdo->prepare( "INSERT INTO ". $tabela .
                        " ( nome,sobrenome, idade, endereco, fone, email, cpf_cnpj, tipo, estrela, enderecoCobranca )".
                        "VALUES (:nome, :sobrenome, :idade, :endereco, :fone, :email, :cpf_cnpj, :tipo, :estrela, :enderecoCobranca )");

            $cadastra->bindParam( ":nome", $pessoa->getNome(),\PDO::PARAM_STR, 25 );
            $cadastra->bindParam( ":sobrenome", $pessoa->getSobrenome(),\PDO::PARAM_STR, 50 );
            $cadastra->bindParam( ":idade", $pessoa->getIdade(),\PDO::PARAM_INT );
            $cadastra->bindParam( ":endereco", $pessoa->getEndereco(),\PDO::PARAM_STR, 200 );
            $cadastra->bindParam( ":fone", $pessoa->getFone(),\PDO::PARAM_STR, 13 );
            $cadastra->bindParam( ":email", $pessoa->getEmail(),\PDO::PARAM_STR, 50 );
            ( $pessoa->getTipo() == "pessoa juridica" )? $cadastra->bindParam( ":cpf_cnpj", $pessoa->getCnpj(),\PDO::PARAM_STR, 14 ) : $cadastra->bindParam( ":cpf_cnpj", $pessoa->getCpf(),\PDO::PARAM_STR, 12 );
            $cadastra->bindParam( ":tipo", $pessoa->getTipo(),\PDO::PARAM_STR, 25 );
            $cadastra->bindParam( ":estrela", $pessoa->getEstrela(),\PDO::PARAM_INT );
            $cadastra->bindParam( ":enderecoCobranca", $pessoa->getEnderecoCobranca(),\PDO::PARAM_STR, 200 );

            $cadastra->execute();

            $pdo->commit();

        }catch ( \PDOException $e ){

            echo "Não é possivel fazer o cadastro dos dados";
            die( "Código: {$e->getCode()}, Menagem: {$e->getMessage()}" );

        }
    }

}