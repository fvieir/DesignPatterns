<?php

namespace App\Calculadora;

use App\Calculadora\EstadosOrcamento\Finalizado;
use App\Http\HttpAdapatador;
use Exception;

class RegistroOrcamento {

    public function __construct(
        private HttpAdapatador $http
    ) {}

    public function registrar (Orcamento $orcamento) {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new Exception('Apenas orçamento fianlizados podem ser registrados na API');
        }

        $this->http->post('https://api.registrar-orcamento') ;
    }

}