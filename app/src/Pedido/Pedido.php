<?php

namespace App\Pedido;

use App\Calculadora\Orcamento;
use DateTimeInterface;

class Pedido {
    public string $nomeCliente;
    public Orcamento $orcamento;
    public DateTimeInterface $dataFinalizacao;

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