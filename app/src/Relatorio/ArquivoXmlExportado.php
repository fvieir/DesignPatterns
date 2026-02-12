<?php 

namespace App\Relatorio;

use SimpleXMLElement;
class ArquivoXmlExportado implements ArquivoExportado {

    public function __construct(
        private string $descricao,
    ) {}
    public function exportar(ConteundoExportado $conteundoExportado): string {

        $elementoXml = new SimpleXMLElement("<{$this->descricao}/>");
        $elementoXml->addChild('xml.array', \json_encode($conteundoExportado->conteudo()));

        return $elementoXml->asXML();
    }

}