<?php

namespace App\Calculadora\Impostos;

use App\Calculadora\Orcamento;

class Icms extends Imposto {
    public function realizaCaculoEspecifico(Orcamento $orçamento){
        return $orçamento->valor * 0.1;
    }
}