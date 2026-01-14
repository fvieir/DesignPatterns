<?php

namespace App\Calculadora;

class CalculadoraDesconto {

    public function calcularDescontos (Orcamento $orcamento): float {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.06;
        }

        return 0;
    }

}