<?php

use App\Calculadora\ItensOrcamento;
use App\Calculadora\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();

$itensDeOrcamento = new ItensOrcamento();
$itensDeOrcamento->quantidadeItens = 5;
$itensDeOrcamento->valor = 500;
$orcamento->addItens($itensDeOrcamento);

$itensDeOrcamento2 = new ItensOrcamento();
$itensDeOrcamento2->quantidadeItens = 1;
$itensDeOrcamento2->valor = 150;
$orcamento->addItens($itensDeOrcamento2);

$orcamentoAntingo = new Orcamento();
$itensDeOrcamento3 = new ItensOrcamento();
$itensDeOrcamento3->quantidadeItens = 1;
$itensDeOrcamento3->valor = 150;
$orcamento->addItens($itensDeOrcamento3);

$orcamento->addItens($orcamentoAntingo);


echo 'Valor total => '. $orcamento->valor();
// echo 'Valor total => '. $orcamento->quantidadeItems();
