<?php

namespace App\Calculadora\EstadosOrcamento;

use App\Calculadora\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
    public function calculadoraDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException("Orçamento finalizado não pode calcular descontos");
    }
}