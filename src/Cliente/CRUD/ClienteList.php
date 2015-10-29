<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 27/10/15
 * Time: 23:12
 */

namespace Cliente\CRUD;

use Cliente\CRUD\ClienteCrud as Crud;
use Cliente\Pessoa\Tipo\PessoaFisica as PessoaFisica;
use Cliente\Pessoa\Tipo\PessoaJuridica as PessoaJuridica;

class ClienteList
{
    private $crud;

    /**
     * @return ClienteCrud
     */
    public function getCrud()
    {
        return $this->crud;
    }

    /**
     * @param ClienteCrud $crud
     * @return ClienteList
     */
    public function setCrud($crud)
    {
        $this->crud = $crud;
        return $this;
    }
    /**
     * ClienteList constructor.
     */
    public function __construct()
    {
        $this->crud = new Crud();
        $this->CadastroClientes();
    }

    public function CadastroClientes(){

        $this->crud->addCliente(new PessoaFisica(1,
                                                    "Maycon",
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
        $this->crud->addCliente(new PessoaFisica(2,
                "Joao",
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
        $this->crud->addCliente(new PessoaJuridica(3,
                "Mario",
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
        $this->crud->addCliente(new PessoaFisica(4,
                "Alexandre",
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
        $this->crud->addCliente(new PessoaFisica(5,
                "Ronaldo",
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
        $this->crud->addCliente(new PessoaJuridica(6,
                "Alex",
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
}