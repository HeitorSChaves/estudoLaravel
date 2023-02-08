<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\sobreNosController;
use App\Http\Controllers\contatoController;



Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [sobreNosController::class, 'principal'])->name('site.sobrenos');

Route::get('/contato', [contatoController::class, 'principal'])->name('site.contato');

Route::get('/login', function () {
  return 'Login'; })->name('site.login');

//Criando prefixo e agrupando rotas 

Route::prefix('/app') -> group(function(){

  Route::get('/clientes', function () {
    return 'Clientes'; }) -> name('app.clientes');

  Route::get('/fornecedores', function () {
    return 'Fornecedores'; }) -> name('app.fornecedores');

  Route::get('/produtos', function () {
    return 'Produtos'; }) -> name('app.produtos');
});

Route::get('/rota1', function (){
  echo 'Rota 1';
}) -> name('site.rota1');


Route::get('/rota2', function(){
  return redirect() -> route('site.rota1'); //Redirecionando dentro da função (poderia ser um controller).
}) -> name('site.rota2');


//Route::redirect('/rota2','/rota1'); //Redireciona de uma rota X para Y no momento do acesso.


Route::fallback(function(){
    echo 'A rota acessada não existe.<a href="'.route("site.index").'"> Clique aqui </a>para ir para a página inicial'; //Criando fallback.
});


/*
Verbo http

get
post
put
patch
delete
options

*/
