<?php

namespace App\Relatorio;

use App\Pedido\Pedido;
use DateTimeImmutable;

class PedidoExportado implements ConteundoExportado {

    public function __construct(
        private Pedido $pedido
    ) {
        $this->pedido->dataFinalizacao = new DateTimeImmutable();
    }
    public function conteudo(): array
    {
        return [
            'nomeCliente' => $this->pedido->nomeCliente,
            'quantidadeItens' => $this->pedido->dataFinalizacao,
        ];
    }

}