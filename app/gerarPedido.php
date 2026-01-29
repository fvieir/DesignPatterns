<?php

use App\Command\GerarPedido;
use App\Command\GerarPedidoLidar;



require __DIR__. '/vendor/autoload.php';

$valorOrcamento = (float) $argv[0];
$numeroDeItens = (float) $argv[1];
$nomeCliente = $argv[2];

$gerarPedido = new GerarPedido($nomeCliente, $numeroDeItens, $valorOrcamento);
$gerarPedidoLidar = new GerarPedidoLidar();
$gerarPedidoLidar->executar($gerarPedido);


