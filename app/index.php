<?php

require __DIR__ . '/vendor/autoload.php';

use App\Calculadora\CalculadoraDesconto;
use App\Calculadora\CalculadoraImposto;
use App\Calculadora\Impostos\Icms;
use App\Calculadora\Impostos\Iss;
use App\Calculadora\Orcamento;

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

/*
$cal = new CalculadoraImposto();

echo 'Padrão Strategy';
echo '##############################';
echo '<hr>';
echo 'ICMS => '. $cal->calcula($orcamento, new Icms); 
echo '<br>';
echo 'ISS => '. $cal->calcula($orcamento, new Iss);
echo '<hr>';

*/

echo '##############################';
echo '<br>';
echo 'Padrão Chain of Responsabiliy';
echo '<hr>';

$calculadoraDesconto = new CalculadoraDesconto();
echo 'Desconto => ' . $calculadoraDesconto->calcularDescontos($orcamento);



