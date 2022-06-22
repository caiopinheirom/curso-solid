<?php

use App;

class CarrinhoCompra
{
    //Atributos
    private $itens;
    private $valor;
    private $valorTotal;

    //Métodos
    public function __construct()
    {
        $this->itens = [];
        $this->valor = [];
        $this->valorTotal = 0;
    }

    public function exibirItens()
    {
        return $this->itens;
    }

    public function exibirValor()
    {
        return $this->valor;
    }

    public function exibirValorTotal()
    {
        return $this->valorTotal;
    }

    public function adicionarItem(string $item, float $valor)
    {
        array_push($this->itens, $item);
        array_push($this->valor, $valor);
        $this->valorTotal += $valor;
        return $this->valorTotal;
    }
}
