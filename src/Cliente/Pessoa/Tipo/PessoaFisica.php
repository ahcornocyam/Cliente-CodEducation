<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 27/10/15
 * Time: 18:16
 */

namespace Cliente\Pessoa\Tipo;


use Cliente\Pessoa\Interfaces\PessoaFisicaInterface;
use Cliente\Pessoa\PessoaAbstract;

class PessoaFisica extends PessoaAbstract implements PessoaFisicaInterface
{
    private $cpf;
    /**
     * PessoaFisica constructor.
     * @param $cpf
     * @param $estrela
     * @param $enderecoCobranca
     */
    public function __construct($nome, $sobrenome, $idade, $endereco, $fone, $email, $tipo, $cpf, $estrela, $enderecoCobranca = null)
    {
        parent::__construct($nome,$sobrenome,$idade,$endereco,$fone,$email,"pessoa Fisica",$estrela,$enderecoCobranca);
        $this->cpf = $cpf;

    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }
    /**
     * @param mixed $cpf
     * @return PessoaFisica
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getDocumento(){
        return $this->getCpf();
    }
}