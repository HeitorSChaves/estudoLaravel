<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\sobreNosController;
use App\Http\Controllers\contatoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PrincipalController::class, 'principal'])->name('/.principal');

Route::get('/sobre-nos', [sobreNosController::class, 'principal'])->name('sobre-nos.principal');

Route::get('/contato', [contatoController::class, 'principal'])->name('contato.principal');

//Nome, categoria, assunto, mensagem

Route::get('contato/{nome}/{categoria}/{assunto}/{mensagem}', function (string $nome, string $categoria, string $assunto, string $mensagem) {
    echo 'Estamos aqui ' . $nome. "<br>Gostaria de falar com o time de $categoria sobre $assunto.<br>$mensagem";
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
