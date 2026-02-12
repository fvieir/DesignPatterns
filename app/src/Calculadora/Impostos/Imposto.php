<?php

namespace App\Calculadora\Impostos;

use App\Calculadora\Orcamento;

abstract class Imposto {

    private $outroImposto;

    public function __construct(
        ?Imposto $outroImposto = null
    ) {
        $this->outroImposto = $outroImposto;
    }
    
    abstract protected function realizaCaculoEspecifico(Orcamento $orcamento);
    
    public function calcular(Orcamento $orcamento) {
        return $this->realizaCaculoEspecifico($orcamento) + $this->outroImposto?->realizaOutroCalculo($orcamento);
    }

    private function realizaOutroCalculo(Orcamento $orcamento) {
        die(\gettype($this->outroImposto));
        return $this->outroImposto === null ? 0 : $this->realizaCaculoEspecifico($orcamento);
    }

}