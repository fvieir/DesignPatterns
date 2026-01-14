<?php

namespace App\Calculadora;

use App\Calculadora\Descontos\CalcularDesconto5Items;
use App\Calculadora\Descontos\CalcularDescontoAcima500Reais;
use App\Calculadora\Descontos\Desconto5Items;
use App\Calculadora\Descontos\DescontoAcima500Reais;
use App\Calculadora\Descontos\SemDesconto;

class CalculadoraDesconto {

    public function calcular (Orcamento $orcamento): float {

        $cadeiaDescontos = new Desconto5Items(
            new DescontoAcima500Reais(
                new SemDesconto(null)
            )
        );

        return $cadeiaDescontos->calcularDesconto($orcamento);
    }

}