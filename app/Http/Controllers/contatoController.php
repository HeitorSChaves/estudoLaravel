<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class contatoController extends Controller
{
    public function index (Request $request){

       
        return view('site.contato', ['titulo'=>'Super Gestão - Contato']);
    }
    public function principal (Request $request){

        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();

        return view('site.contato', ['titulo'=>'Super Gestão - Contato']);
    }
}
