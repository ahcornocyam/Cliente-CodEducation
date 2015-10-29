<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 27/10/15
 * Time: 17:05
 */

namespace Cliente\Pessoa;

use Cliente\Pessoa\Interfaces\EnderecoCobrancaInterface;
use Cliente\Pessoa\Interfaces\GrauImportanciaInterface;

abstract class PessoaAbstract implements EnderecoCobrancaInterface,GrauImportanciaInterface
{
    private $id;
    private $nome;
    private $sobrenome;
    private $idade;
    private $endereco;
    private $fone;
    private $email;
    private $tipo;
    private $estrela;
    private $enderecoCobranca;

    /**
     * PessoaAbstract constructor.
     * @param $id
     * @param $nome
     * @param $sobrenome
     * @param $idade
     * @param $endereco
     * @param $fone
     * @param $email
     * @param $tipo
     */
    public function __construct($id, $nome, $sobrenome, $idade, $endereco, $fone, $email, $tipo, $estrela,$enderecoCobranca=null)
    {
        $this->setId($id)
            ->setNome($nome)
            ->setSobrenome($sobrenome)
            ->setIdade($idade)
            ->setEndereco($endereco)
            ->setFone($fone)
            ->setEmail($email)
            ->setTipo($tipo)
            ->setEstrela($estrela);
        ($enderecoCobranca == null)? $this->enderecoCobranca = $endereco: $this->enderecoCobranca = $enderecoCobranca;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return PessoaAbstract
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return PessoaAbstract
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     * @return PessoaAbstract
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     * @return PessoaAbstract
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     * @return PessoaAbstract
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFone()
    {
        return $this->fone;
    }

    /**
     * @param mixed $fone
     * @return PessoaAbstract
     */
    public function setFone($fone)
    {
        $this->fone = $fone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return PessoaAbstract
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     * @return PessoaAbstract
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
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

    abstract public function getDocumento();
}