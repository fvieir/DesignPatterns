<?php

use App\Calculadora\Orcamento;
use App\Relatorio\OrcamentoZip;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 500;

$gerarZip = new OrcamentoZip();
$gerarZip->exportar($orcamento);

