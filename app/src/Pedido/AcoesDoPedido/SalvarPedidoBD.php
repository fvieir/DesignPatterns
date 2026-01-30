<?php

namespace App\AcoesDoPedido;

use App\Pedido\AcoesDoPedido\AcoesAposGerarPedido;
use App\Pedido\Pedido;

class SalvarPedidoBD implements AcoesAposGerarPedido {

    public function acaoAposCriarPedido(Pedido $pedido) : void {
        echo 'Salvar Pedido gerado no banco de dados' . PHP_EOL;
    }

}