<?php

namespace App\Command;

use App\Calculadora\Orcamento;
use App\Pedido\Pedido;
use DateTimeImmutable;

class GerarPedidoLidar {

    public function __construct(
        // Instanciar classes de envio de email
        // Instanciar classes de logs
    ) {}

    public function executar (GerarPedido $gerarPedido,) 
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->setNomeCliente($gerarPedido->getNomeCliente());
        $pedido->setOrcamento($orcamento);
        $pedido->setDataFinazalicao(new DateTimeImmutable());
       
        
        echo "Cria pedido no banco de dados" . PHP_EOL;
        echo "Envia e-mail para cliente" . PHP_EOL;
    }

}