<?php

require __DIR__ . '/vendor/autoload.php';

use App\Calculadora\Impostos\Icms;
use App\Calculadora\Impostos\Iss;
use App\Calculadora\Orcamento;

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 5;

$imposto = new Icms(new Iss());
echo 'Imposto'. $imposto->calcular($orcamento);

/*$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 5;

$calculadoraDesconto = new IKVC();
echo 'Desconto => ' . $calculadoraDesconto->calcular($orcamento);*/



