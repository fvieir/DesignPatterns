<?php

namespace App\Command;

class GerarPedido  {

    public function __construct(
        private string $nomeCliente,
        private float $numeroDeItens,
        private float $valorOrcamento,
    ) {}

    public function getNomeCliente() {
        return $this->nomeCliente;
    }

    public function getNumeroItens() {
        return $this->numeroDeItens;
    }

    public function getValorOrcamento() {
        return $this->valorOrcamento;
    }
}