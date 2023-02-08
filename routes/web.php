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



/*
Verbo http

get
post
put
patch
delete
options

*/
