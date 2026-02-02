<?php

namespace App\Pedido\AcoesDoPedido;

use SplObserver;
use SplSubject;

class SalvarPedidoBD implements SplObserver {

    public function update(SplSubject $pedido) : void {
        \var_dump($pedido);
        echo 'Salvar Pedido gerado no banco de dados' . PHP_EOL;
    }

}