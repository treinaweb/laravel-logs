<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    $numero = 1;

    // Log::debug("O valor da variável número é " . $numero);
    // Log::info('O usuário acesso o recurso X');
    // Log::notice('A API integrada nesse sistema terá uma nova versão em breve');
    // Log::warning('Essa função será desabilitada na próxima versão');
    // Log::error('A view não pode ser carregada');
    // log::critical('O gateway de pegamentos está offline');
    // log::alert('O serviço de consulta de clientes está offline');
    // log::emergency('O banco de dados está offline');

    logger()->alert('teste 123');

    echo "final do método";
});
