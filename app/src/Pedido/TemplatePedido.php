<?php

namespace App\Pedido;

use DateTimeInterface;

class TemplatePedido {

    private DateTimeInterface $date;
    private string $nomeCliente;

    public function __construct(DateTimeInterface $data, string $nomeCliente)
    {        
        $this->date = $data;
        $this->nomeCliente = $nomeCliente;
    }

    public function dataFinalizacao(): DateTimeInterface {
        return $this->date;
    }

    public function nomeCliente(): string {
        return $this->nomeCliente;
    }

}