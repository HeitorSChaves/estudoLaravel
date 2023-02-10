<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function principal (){
        return view('site.contato', ['titulo'=>'Super Gestão - Contato']);
    }
}
