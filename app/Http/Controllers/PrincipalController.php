<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return view('site.principal', ['titulo' => 'Super Gestão - Página Inicial']);
    }
}
