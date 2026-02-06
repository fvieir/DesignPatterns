<?php

namespace App\Http;

interface HttpAdapatador {

    public function post(string $url, array $data = []): void;

}