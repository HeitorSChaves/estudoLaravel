<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\sobreNosController;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\TesteController;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [sobreNosController::class, 'principal'])->name('site.sobrenos');

Route::get('/contato', [contatoController::class, 'index'])->name('contato.index');
Route::post('/contato', [contatoController::class, 'salvar'])->name('site.contato');


Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

//Criando prefixo e agrupando rotas

Route::middleware('log.acesso','autenticacao')->prefix('/app') -> group(function(){

  Route::get('/home', [HomeController::class, 'index'])-> name('app.home');

  Route::get('/sair', [LoginController::class, 'sair']) -> name('app.sair');

  Route::get('/cliente', [ClienteController::class, 'index']) -> name('app.cliente');

  Route::get('/fornecedor', [FornecedorController::class, 'index']) -> name('app.fornecedor');

  Route::get('/produto', [ProdutoController::class, 'index']) -> name('app.produto');
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
