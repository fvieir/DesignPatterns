<?php

namespace App\Pedido;

use App\Calculadora\Orcamento;
use DateTimeInterface;

class Pedido {
    private string $nomeCliente;
    private Orcamento $orcamento;
    private DateTimeInterface $dataFinalizacao;

    public function __construct(
    ){}

    public function setNomeCliente(string $nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }
    public function setOrcamento(Orcamento $orcamento) {
        $this->orcamento = $orcamento;
    }
    public function setDataFinazalicao(DateTimeInterface $dataFinalizacao) {
        $this->dataFinalizacao = $dataFinalizacao;
    }

}