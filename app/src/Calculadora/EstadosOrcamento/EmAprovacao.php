<?php

namespace App\Calculadora\EstadosOrcamento;

use App\Calculadora\Orcamento;

class EmAprovacao extends EstadoOrcamento
{

    public function calculadoraDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function aprova(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprova(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Reprovado();
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}