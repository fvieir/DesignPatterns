<?php

use App\Command\GerarPedido;
use App\Command\GerarPedidoLidar;
use App\Pedido\AcoesDoPedido\SalvarPedidoBD;
use App\Pedido\AcoesDoPedido\EnviarEmailPedido;
use App\Pedido\AcoesDoPedido\GerarLogPedido;

require __DIR__. '/vendor/autoload.php';

$valorOrcamento = (float) $argv[0];
$numeroDeItens = (float) $argv[1];
$nomeCliente = $argv[2];

$gerarPedido = new GerarPedido($nomeCliente, $numeroDeItens, $valorOrcamento);

$gerarPedidoLidar = new GerarPedidoLidar();
$gerarPedidoLidar->attach(new SalvarPedidoBD());
$gerarPedidoLidar->attach(new EnviarEmailPedido());
$gerarPedidoLidar->attach(new GerarLogPedido());
$gerarPedidoLidar->executar($gerarPedido);


