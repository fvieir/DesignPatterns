<?php

namespace App\Pedido\AcoesDoPedido;

use SplObserver;
use SplSubject;

class GerarLogPedido implements SplObserver {

    public function update(SplSubject $pedido) : void {
        echo 'Gerar Log do Pedido gerado' . PHP_EOL;
    }

}