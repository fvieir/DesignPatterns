<?php 

namespace App\Relatorio;

use ZipArchive;

class ArquivoZipExportado implements ArquivoExportado {

    public function exportar(ConteundoExportado $conteundoExportado): string {

        $fileName = \tempnam(\sys_get_temp_dir(), 'zip');

        $zip = new ZipArchive();
        $zip->open($fileName, ZipArchive::CREATE);
        $zip->addFromString('orcamento.serial', \serialize($conteundoExportado->conteudo()));
        $zip->close();

        return $fileName;
    }

}