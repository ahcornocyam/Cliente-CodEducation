<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 27/10/15
 * Time: 23:12
 */

namespace Cliente\CRUD;


use Cliente\CRUD\CrudCliente as Crud;
use Cliente\DB\Connectar\Conectar;
use Cliente\Pessoa\Tipo\PessoaFisica as PessoaFisica;
use Cliente\Pessoa\Tipo\PessoaJuridica as PessoaJuridica;

class Fixtures
{
    private $crud;
    private $pdo;

    /**
     * ClienteList constructor.
     */
    public function __construct( $tabela )
    {
        $this->pdo = Conectar::getConecta();
        $this->crud = new Crud( $this->pdo );
        $this->verificar( $tabela );

    }

    public function cadastroClientes(){

        $this->crud->persist(new PessoaFisica(   "Maycon",
                                                    "Alexandre",
                                                    30,
                                                    "rua 1",
                                                    "1234567890",
                                                    "maycon@a.com",
                                                    "pessoa fisica",
                                                    "111.111.111.11",
                                                    5
                                                )
                                );
        ///////////////////////////////////////////////////////////
        $this->crud->persist(new PessoaFisica("Joao",
                "Silva",
                43,
                "rua 2",
                "1234567890",
                "joao@a.com",
                "pessoa fisica",
                "445.222.333.77",
                5,
                "rua 23"
            )
        );
        ///////////////////////////////////////////////////////////
        $this->crud->persist(new PessoaJuridica("Mario",
                "Quintana",
                41,
                "rua 3",
                "1234567890",
                "marioquintana@a.com",
                "pessoa juridica",
                "11-3313.5218",
                5
            )
        );
        ///////////////////////////////////////////////////////////
        $this->crud->persist(new PessoaFisica("Alexandre",
                "fulano",
                38,
                "rua 1",
                "1234567890",
                "fulano@a.com",
                "pessoa fisica",
                "333.333.333.33",
                3,
                "rua 12"
            )
        );
        ///////////////////////////////////////////////////////////
        $this->crud->persist(new PessoaFisica("Ronaldo",
                "Andrade",
                28,
                "rua 15",
                "1234567890",
                "roanaldoandrade@a.com",
                "pessoa fisica",
                "222.222.222.22",
                2
            )
        );
        ///////////////////////////////////////////////////////////
        $this->crud->persist(new PessoaJuridica("Alex",
                "da Rocha",
                54,
                "rua 11",
                "1234567890",
                "alexdarocha@a.com",
                "pessoa juridica",
                "11-3313.4444",
                3,
                "rua 30"
            )
        );
        ///////////////////////////////////////////////////////////
    }


    public function verificar($tabela){
        try{
            $verifica = $this->pdo->prepare("SELECT * FROM {$tabela} ");
            $verifica->execute();
            $rows = $verifica->fetchAll();
            if( $rows == null ){
                $this->cadastroClientes();
                $this->crud->flush();
            }
        }catch (\PDOException $e){
            echo "Não é possivel fazer a listagem dos dados";
            die( "Código: {$e->getCode()}, Menagem: {$e->getMessage()}" );
        }
    }
}