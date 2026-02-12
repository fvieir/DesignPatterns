<?php 

namespace App\Relatorio;

interface ArquivoExportado {

    public function exportar(ConteundoExportado $conteundoExportado): string;

}