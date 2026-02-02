<?php

namespace App\Pedido\AcoesDoPedido;

use SplObserver;
use SplSubject;

class EnviarEmailPedido implements SplObserver {
    public function update(SplSubject $pedido): void {
        echo 'Enviar Email do Pedido gerado' . PHP_EOL;
    }

}