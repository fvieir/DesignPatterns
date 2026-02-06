<?php

use App\Calculadora\Orcamento;
use App\Calculadora\RegistroOrcamento;
use App\Http\CurlHttpAdaptator;

require 'vendor/autoload.php';

$http = new CurlHttpAdaptator();
$registrarOrcamento = new RegistroOrcamento($http);
$registrarOrcamento->registrar(new Orcamento());