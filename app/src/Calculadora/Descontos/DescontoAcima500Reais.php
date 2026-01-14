<?php

namespace App\Calculadora\Descontos;

use App\Calculadora\Orcamento;

class DescontoAcima500Reais extends Desconto {
    public function calcularDesconto (?Orcamento $orcamento): float {

        if ($orcamento->valor > 500) {        
            return $orcamento->valor * 0.06;
        }

        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}