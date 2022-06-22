<?php

require __DIR__."/vendor/autoload.php";

use App;

$carrinhoCompra = new CarrinhoCompra();

echo $carrinhoCompra->exibirItens();

$carrinhoCompra->adicionarItem("Pastel de Carne", 7.0);
$carrinhoCompra->adicionarItem("Pastel de Frango", 6.5);

print_r($carrinhoCompra->exibirItens());