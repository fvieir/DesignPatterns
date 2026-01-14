<?php

namespace App\Calculadora\Impostos;

use App\Calculadora\Orcamento;

class Icms implements Imposto {
    public function calcular (Orcamento $orçamento){
        return $orçamento->valor * 0.1;
    }
}