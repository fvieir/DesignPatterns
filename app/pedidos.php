<?php

use App\Calculadora\Orcamento;
use App\Pedido\CriadorDePedido;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedidos = new CriadorDePedido();

for ($i=0; $i < 1000 ; $i++) {
    $pedido = $criadorPedidos->criarPedido('teste', new Orcamento(), date('Y-m-d'));
    $pedidos[$i] = $pedido;
}

echo memory_get_peak_usage() . PHP_EOL;