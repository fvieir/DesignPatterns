<?php

namespace App\Command;

use App\Calculadora\Orcamento;
use App\Pedido\Pedido;
use DateTimeImmutable;
use SplObserver;
use SplSubject;

class GerarPedidoLidar  implements SplSubject {

    /**
     * Summary of acoesAposGerarPedido
     * @var SplObserver[]
     */
    private array $acoesAposGerarPedido = [];
    public Pedido $pedido;

    public function __construct () {}

    public function executar (GerarPedido $gerarPedido,): void 
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->setNomeCliente($gerarPedido->getNomeCliente());
        $pedido->setOrcamento($orcamento);
        $pedido->setDataFinazalicao(new DateTimeImmutable());

        $this->pedido = $pedido;
        $this->notify();
    }

    public function attach(SplObserver $observer): void {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer): void {

    }

    public function notify(): void {
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}