<?php

namespace App\Calculadora\EstadosOrcamento;

use App\Calculadora\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculadoraDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}