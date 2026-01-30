<?php

namespace App\Command;

use App\Calculadora\Orcamento;
use App\Pedido\AcoesDoPedido\AcoesAposGerarPedido;
use App\Pedido\Pedido;
use DateTimeImmutable;

class GerarPedidoLidar {

    /**
     * Summary of acoes
     * @var AcoesAposGerarPedido[]
     */
    private array $acoes = [];

    public function __construct () {}

    public function acoes(AcoesAposGerarPedido $acao): void {
        $this->acoes[] = $acao;
    }

    public function executar (GerarPedido $gerarPedido,): void 
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->setNomeCliente($gerarPedido->getNomeCliente());
        $pedido->setOrcamento($orcamento);
        $pedido->setDataFinazalicao(new DateTimeImmutable());
       
        foreach ($this->acoes as $key => $acao) {
            $acao->acaoAposCriarPedido($pedido);
        }
    }

}