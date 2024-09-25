<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FornecedorController;

use Illuminate\Support\Facades\Route;




Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'SobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'Contato'])->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');


Route::prefix('/app') ->group(function() {
Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
Route::get('/fornecedor', function (){return 'Fornecedor';})->name('app.fornecedor');
Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
// Geracao de conexao da rota com os controllers e views

});


//Parametro de rotas.
Route::get('/teste/{p1}/{p2}', function (int $p1, int $p2) {
    return "A soma de $p1 + $p2 é: " . ($p1 + $p2);
})->name('teste');


// tratamento de retorno de not fund.
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a>';
});
