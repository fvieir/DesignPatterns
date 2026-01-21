<?php

require __DIR__ . '/vendor/autoload.php';

use App\Calculadora\Impostos\IKVC;
use App\Calculadora\Orcamento;

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 5;

$calculadoraDesconto = new IKVC();
echo 'Desconto => ' . $calculadoraDesconto->calcular($orcamento);



