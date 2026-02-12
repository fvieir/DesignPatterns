<?php

namespace App\Calculadora\Impostos;

use App\Calculadora\Orcamento;

class Iss extends Imposto {

    public function realizaCaculoEspecifico (Orcamento $orçamento): float {
        return $orçamento->valor * 0.06;
    }
}