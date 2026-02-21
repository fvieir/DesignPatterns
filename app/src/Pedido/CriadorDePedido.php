<?php

namespace App\Pedido;

use App\Calculadora\Orcamento;
use DateTimeImmutable;
use DateTimeInterface;

class CriadorDePedido {
    private array $templates = [];

    public function criarPedido(
        string $nomeCliente,
        Orcamento $orcamento,
        string $dataFormatada,
    ): Pedido {
        $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);

        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;    
    }

    private function gerarTemplatePedido(
        string $nomeCliente, 
        string $dataFormatada
    ): TemplatePedido {
        $hash = \md5($nomeCliente . '-'. $dataFormatada);

        echo 'templates'. \json_encode($this->templates);

        if (!array_key_exists($hash, $this->templates)) {
            $template = new TemplatePedido( 
                new DateTimeImmutable($dataFormatada), 
                $nomeCliente);

            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }

}