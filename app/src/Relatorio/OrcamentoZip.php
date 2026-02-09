<?php

namespace App\Relatorio;

use App\Calculadora\Orcamento;
use ZipArchive;

class OrcamentoZip {

    public function exportar(Orcamento $orcamento)
    {
        $fileName = \sys_get_temp_dir() . \DIRECTORY_SEPARATOR . 'orcamento.zip';

        $zip = new ZipArchive();
        $zip->open($fileName, ZipArchive::CREATE);
        $zip->addFromString('orcamento.serial', \serialize($orcamento));
        $zip->close();

    }
}