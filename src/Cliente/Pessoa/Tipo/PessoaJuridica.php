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
    private $estrela;
    private $enderecoCobranca;

    /**
     * PessoaJuridica constructor.
     * @param $cnpj
     * @param $estrela
     * @param $enderecoCobranca
     */
    public function __construct($id, $nome, $sobrenome, $idade, $endereco, $fone, $email, $tipo, $cnpj, $estrela, $enderecoCobranca = null)
    {
        parent::__construct($id,$nome,$sobrenome,$idade,$endereco,$fone,$email,"pessoa juridica");
        $this->cnpj = $cnpj;
        $this->estrela = $estrela;
        ($enderecoCobranca == null)? $this->enderecoCobranca = $endereco: $this->enderecoCobranca = $enderecoCobranca;
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

    /**
     * @return mixed
     */
    public function getEstrela()
    {
        return $this->estrela;
    }

    /**
     * @param mixed $estrela
     * @return PessoaJuridica
     */
    public function setEstrela($estrela)
    {
        $this->estrela = $estrela;
        return $this;
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
     * @return PessoaJuridica
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }
    public function getDocumento(){
        return $this->getCnpj();
    }
}