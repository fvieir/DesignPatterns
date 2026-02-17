<?php

namespace App\Calculadora;

class ItensOrcamento implements Orcavel {

    public float $quantidadeItens;
    public float $valor;

    public function valor() : float {
        return $this->valor;
    }

    public function quantidadeItems() : float {
        return $this->quantidadeItens;
    }

}