<?php

namespace App\Pedido\AcoesDoPedido;

use App\Pedido\AcoesDoPedido\AcoesAposGerarPedido;
use App\Pedido\Pedido;

class GerarLogPedido implements AcoesAposGerarPedido {

    public function acaoAposCriarPedido(Pedido $pedido) : void {
        echo 'Gerar Log do Pedido gerado' . PHP_EOL;
    }

}