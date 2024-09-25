<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;




Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'SobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'Contato'])->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');


Route::prefix('/app') ->group(function() {
Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
Route::get('/fornecedores', function(){return 'Fornecedores';})->name('app.fornecedores');
Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::get('rota1', function(){
    echo 'Rota1';
})->name('site.rota1');

Route::get('rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');


Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a>';
});
