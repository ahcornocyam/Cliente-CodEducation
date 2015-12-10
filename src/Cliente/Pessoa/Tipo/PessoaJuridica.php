<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 27/10/15
 * Time: 18:16
 */

namespace Cliente\Pessoa\Tipo;


use Cliente\Pessoa\Interfaces\PessoaJuridicaInterface;
use Cliente\Pessoa\PessoaAbstract;

class PessoaJuridica extends PessoaAbstract implements PessoaJuridicaInterface
{
    private $cnpj;


    /**
     * PessoaJuridica constructor.
     * @param $cnpj
     * @param $estrela
     * @param $enderecoCobranca
     */
    public function __construct($nome, $sobrenome, $idade, $endereco, $fone, $email, $tipo, $cnpj, $estrela, $enderecoCobranca = null)
    {
        parent::__construct($nome,$sobrenome,$idade,$endereco,$fone,$email,"pessoa juridica",$estrela,$enderecoCobranca);
        $this->cnpj = $cnpj;

    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     * @return PessoaJuridica
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }


    public function getDocumento(){
        return $this->getCnpj();
    }
}