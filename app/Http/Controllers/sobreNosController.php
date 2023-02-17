<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware;

class sobreNosController extends Controller
{
    public function principal(){
        return view('site.sobre-nos', ['titulo'=>'Super Gestão - Sobre Nós' ]);
    }
}
