<?php 

namespace App\Http;

class ReactHttpAdaptator implements HttpAdapatador {

    public function post(string $url, array $data = []): void
    {
        // Instanciando React PHP
        // PReparando dados
        //Executando na api

        echo "React PHP!". \PHP_EOL;
    }

}