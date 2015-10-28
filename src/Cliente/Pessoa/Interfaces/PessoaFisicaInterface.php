<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 27/10/15
 * Time: 18:24
 */

namespace Cliente\Pessoa\Interfaces;


interface PessoaFisicaInterface
{
    public function getCpf();
    public function setCpf($valor);
}