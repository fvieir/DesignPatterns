<?php

namespace App\Relatorio;

use App\Calculadora\Orcamento;

class OrcamentoExportado implements ConteundoExportado {

    public function __construct(
        private Orcamento $orcamento
    ) {}
    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidadeItens' => $this->orcamento->quantidadeItens,
        ];
    }

}