<?php

use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    $numero = 1;

    Context::add('usuario_logado', 'João');
    Context::addHidden('chave_api', '47283748923749283749');

    Log::debug("Realizando a importação dos registros do XML", [
        'codigo_produto' => $numero
    ]);

    Context::forget('usuario_logado');

    echo Context::getHidden('chave_api');


    // Log::info('O usuário acesso o recurso X');
    // Log::notice('A API integrada nesse sistema terá uma nova versão em breve');
    // Log::warning('Essa função será desabilitada na próxima versão');
    // Log::error('A view não pode ser carregada');
    // log::critical('O gateway de pegamentos está offline');
    // log::alert('O serviço de consulta de clientes está offline');
    // log::emergency('O banco de dados está offline');

    logger()->alert('teste 123', [
        'teste' => '1234'
    ]);

    echo "<br>final do método";
});
