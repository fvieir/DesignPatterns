<?php

namespace App\Relatorio;

use App\Calculadora\Orcamento;
use SimpleXMLElement;

class OrcamentoXml {

    public function exportar(Orcamento $orcamemto): string
    {
        $elementoXml = new SimpleXMLElement('<orcamento/>');
        $elementoXml->addChild('valor', $orcamemto->valor);
        $elementoXml->addChild('itens', $orcamemto->quantidadeItens);

        return $elementoXml->asXML();
    }

}