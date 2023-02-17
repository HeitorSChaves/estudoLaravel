<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\sobreNosController;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\TesteController;
use App\Http\Middleware\LogAcessoMiddleware;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [sobreNosController::class, 'principal'])->name('site.sobrenos');

Route::get('/contato', [contatoController::class, 'index'])->name('contato.index');
Route::post('/contato', [contatoController::class, 'salvar'])->name('site.contato');


Route::get('/login', function () {
  return 'Login'; })->name('site.login');

//Criando prefixo e agrupando rotas

Route::middleware('log.acesso','autenticacao')->prefix('/app') -> group(function(){

  Route::get('/clientes', function () {
    return 'Clientes'; }) -> name('app.clientes');

  Route::get('/fornecedores', [FornecedorController::class, 'index']) -> name('app.fornecedores');

  Route::get('/produtos', function () {
    return 'Produtos'; }) -> name('app.produtos');
});

Route::get('/rota1', function (){
  echo 'Rota 1';
}) -> name('site.rota1');


Route::fallback(function(){
    echo 'A rota acessada não existe.<a href="'.route("site.index").'"> Clique aqui </a>para ir para a página inicial'; //Criando fallback.
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])-> name('site.teste');

/*
Verbo http

get
post
put
patch
delete
options

*/
