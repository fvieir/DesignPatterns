<?php 

use App\Calculadora\ListaDeOrcamentos;
use App\Calculadora\Orcamento;

require 'vendor/autoload.php';

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 5;
$orcamento1->valor = 500;
$orcamento1->aprova();

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 3;
$orcamento2->valor = 1500;
$orcamento2->reprova();

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 1;
$orcamento3->valor = 100;
$orcamento3->finaliza();

$orcamentos = new ListaDeOrcamentos();
$orcamentos->addOrcamentos($orcamento1);
$orcamentos->addOrcamentos($orcamento2);
$orcamentos->addOrcamentos($orcamento3);

$orcamentos->mostrarOrcamento();

var_dump($orcamentos->filtrarOrcamento($orcamento1));

var_dump($orcamentos->orcamentosFinalizados());