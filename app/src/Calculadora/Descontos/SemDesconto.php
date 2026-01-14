<?php

namespace App\Calculadora\Descontos;

use App\Calculadora\Orcamento;

class SemDesconto extends Desconto {

    public function calcularDesconto (?Orcamento $orcamento): float {
        return 0.00;
    }
}