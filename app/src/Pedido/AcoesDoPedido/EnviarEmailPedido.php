<?php

namespace App\Pedido\AcoesDoPedido;

use App\Pedido\Pedido;

class EnviarEmailPedido implements AcoesAposGerarPedido {

    public function acaoAposCriarPedido(Pedido $pedido): void {
        echo 'Enviar Email do Pedido gerado' . PHP_EOL;
    }

}