<?php

namespace App\Calculadora\Facade;

class LogDesconto {

    public static function informar(float $descontoCalculado) {

        // bibilioteca de log
        echo 'Salvando Logger em alguma ferramenta de LOG'. $descontoCalculado;
    }

}