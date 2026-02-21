<?php

namespace App\Calculadora;

use App\Calculadora\Descontos\Desconto5Items;
use App\Calculadora\Descontos\DescontoAcima500Reais;
use App\Calculadora\Descontos\SemDesconto;
use App\Calculadora\Facade\LogDesconto;
use LogicException;

class CalculadoraDesconto {

    public function calcular (Orcamento $orcamento): float {

        $cadeiaDescontos = new Desconto5Items(
            new DescontoAcima500Reais(
                new SemDesconto(null)
            )
        );

        $descontoCalulado = $cadeiaDescontos->calcularDesconto($orcamento);
        LogDesconto::informar($descontoCalulado);

        return $descontoCalulado;
    }

}