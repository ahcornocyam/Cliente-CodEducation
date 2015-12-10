<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 09/12/15
 * Time: 17:21
 */

namespace Cliente\CRUD;


use Cliente\DB\Tabela\CRUD as Banco;
use Cliente\Pessoa\PessoaAbstract;

class CrudCliente
{
    private $pessoas;
    private $pdo;
    private $banco;

    /**
     * CrudCliente constructor.
     * @param $pdo
     */
    public function __construct( \PDO $pdo )
    {
        $this->pessoas = array();
        $this->pdo = $pdo;
        $this->banco = new Banco();
    }

    public function persist( PessoaAbstract $pessoa ){
        $this->pessoas[] = $pessoa;
    }

    public function flush(){
        foreach( $this->pessoas as $pessoa ){
            $this->banco->cadastrar( "pessoas",$pessoa );
        }
    }

    public function todasPessoas( $ordem ){
       return $this->banco->consultarTodos( "pessoas", $ordem );
    }

    public function umaPessoa( $id ){

        return $this->banco->consultar( "pessoas", $id );

    }

}