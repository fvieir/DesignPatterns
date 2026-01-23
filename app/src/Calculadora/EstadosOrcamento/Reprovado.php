<?php

namespace App\Calculadora\EstadosOrcamento;

use App\Calculadora\Orcamento;
use DomainException;

class Reprovado extends EstadoOrcamento
{
    public function calculadoraDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException("Orçamento Reprovado não pode calcular descontos");
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}