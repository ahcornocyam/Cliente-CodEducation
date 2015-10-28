<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 27/10/15
 * Time: 18:25
 */

namespace Cliente\Pessoa\Interfaces;


interface PessoaJuridicaInterface
{
    public function getCnpj();
    public function setCnpj($valor);
}