<?php

namespace App\Calculadora\Impostos;

use App\Calculadora\Orcamento;

abstract class ImpostoCom2Aliquotas extends Imposto
{

    public function realizaCaculoEspecifico(Orcamento $orcamento)
    {
        if ($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->calcularTaxaMaxima($orcamento);
        }

        return $this->calcularTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;

    abstract protected function calcularTaxaMaxima(Orcamento $orcamento): float;

    abstract protected function calcularTaxaMinima(Orcamento $orcamento): float;

}