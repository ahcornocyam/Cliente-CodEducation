<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 27/10/15
 * Time: 22:11
 */

namespace Cliente\CRUD;


class ClienteCrud
{
    private $clientes = [];

    /*
     * Lista todos os Clientes
     */
    public function listaClientes(){
        return $this->clientes;
    }

    /*
     * Adiciona os Clientes em um array
     */
    public function addCliente($valor){
        array_push($this->clientes,$valor);
    }
    /*
     * Ordena em ordem Crescente baseado pelo Id do Cliente
     */
    public function ordemCrescente(){
        return asort($this->clientes);
    }
    /*
     * Ordena em ordem Decrescente baseado pelo Id do Cliente
    */
    public function ordemDecrescente(){
        return arsort($this->clientes);
    }
    /*
     * faz uma pesquisa pegando id do cliente
     */
    public function pesquisaCliente($id){

        foreach($this->clientes as $item){
            (in_array($id,(array) $item) == true)? $cliente = $item : null ;
        }
        return $cliente;
    }

}