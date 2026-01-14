<?php

namespace App\Calculadora\Impostos;

use App\Calculadora\Orcamento;

class Iss implements Imposto {

    public function calcular (Orcamento $orçamento): float {
        return $orçamento->valor * 0.06;
    }
}