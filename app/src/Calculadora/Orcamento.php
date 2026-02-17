<?php

namespace App\Calculadora;

use App\Calculadora\EstadosOrcamento\EmAprovacao;
use App\Calculadora\EstadosOrcamento\EstadoOrcamento;

class Orcamento implements Orcavel
{
    /**
     * Summary of itensOrcamento
     * @var ItensOrcamento[]
     */
    private array $itensOrcamentos;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itensOrcamentos = [];
    }

    public function aplicarDescontoExtra()
    {
        return $this->estadoAtual->calculadoraDescontoExtra($this);
    }

    public function aprova(): void
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova(): void
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza(): void
    {
        $this->estadoAtual->finaliza($this);
    }

    public function addItens(Orcavel $item) {
        $this->itensOrcamentos[] = $item;
    }

    public function valor(): float 
    {
        return \array_reduce(
            $this->itensOrcamentos, 
            function (float $valorAcumulado, Orcavel $item) {
                return $valorAcumulado += $item->valor();
        }, 0);
    }

    public function quantidadeItems(): float 
    {
        return \array_reduce(
            $this->itensOrcamentos, 
            fn (float $itemAcumulado, Orcavel $item) => $itemAcumulado += $item->quantidadeItems(), 
            0);
    }
}