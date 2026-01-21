<?php

namespace App\Calculadora\Impostos;

use App\Calculadora\Orcamento;

class IKVC extends ImpostoCom2Aliquotas {

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool 
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }
    
    protected function calcularTaxaMaxima(Orcamento $orcamento) : float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calcularTaxaMinima(Orcamento $orcamento) : float
    {
        return $orcamento->valor * 0.025;
    }
}