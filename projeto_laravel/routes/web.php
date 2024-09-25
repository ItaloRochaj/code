<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;


// Rota para a página "Sobre Nós"
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']); // Use o controlador para a lógica

// Rota para a página de contato
Route::get('/contato', [ContatoController::class, 'contato']);

// Rota para o controlador
Route::get('/principal', [PrincipalController::class, 'principal']);
