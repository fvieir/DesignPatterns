<?php

namespace App\Calculadora;

use App\Calculadora\EstadosOrcamento\EmAprovacao;
use App\Calculadora\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;
    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
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

}