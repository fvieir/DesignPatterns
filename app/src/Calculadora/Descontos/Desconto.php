<?php

namespace App\Calculadora\Descontos;

use App\Calculadora\Orcamento;

abstract class Desconto {

    protected $proximoDesconto;

    public function __construct(?Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
    }

    abstract public function calcularDesconto (Orcamento $orcamento): float;

}
