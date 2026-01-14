<?php

namespace App\Calculadora;

use App\Calculadora\Impostos\Imposto;

class CalculadoraImposto
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calcular($orcamento);
    }
}
