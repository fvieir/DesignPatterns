<?php

namespace App\Calculadora\Impostos;

use App\Calculadora\Orcamento;

interface Imposto {
    public function calcular(Orcamento $orcamento);
}