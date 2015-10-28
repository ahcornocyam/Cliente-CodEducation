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
    private $estrela;
    private $enderecoCobranca;

    /**
     * PessoaFisica constructor.
     * @param $cpf
     * @param $estrela
     * @param $enderecoCobranca
     */
    public function __construct($id, $nome, $sobrenome, $idade, $endereco, $fone, $email, $tipo, $cpf, $estrela, $enderecoCobranca =null)
    {
        parent::__construct($id,$nome,$sobrenome,$idade,$endereco,$fone,$email,"pessoa fisica");
        $this->cpf = $cpf;
        $this->estrela = $estrela;
        ($enderecoCobranca == null)? $this->enderecoCobranca = $endereco: $this->enderecoCobranca = $enderecoCobranca;
    }

    /**
     * @return mixed
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    /**
     * @param mixed $enderecoCobranca
     * @return PessoaFisica
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstrela()
    {
        return $this->estrela;
    }

    /**
     * @param mixed $estrela
     * @return PessoaFisica
     */
    public function setEstrela($estrela)
    {
        $this->estrela = $estrela;
        return $this;
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