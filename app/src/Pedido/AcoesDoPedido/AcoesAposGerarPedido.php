<?php

namespace App\Pedido\AcoesDoPedido;

use App\Pedido\Pedido;

interface AcoesAposGerarPedido {

    public function acaoAposCriarPedido(Pedido $pedido): void;

}