<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class contatoController extends Controller
{
    public function index (Request $request){
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['titulo'=>'Super Gestão - Contato','motivo_contatos'=>$motivo_contatos]);
    }
    public function salvar (Request $request){

        //Validando dados recebidos     
        $motivo_contatos = MotivoContato::all();

        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ],
        [
            'nome.required' => 'O campo :attribute deve ser preenchido.',
            'nome.min' => 'O nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => 'O nome só pode ter no máximo 40 caracteres',
            'telefone.required' => 'O campo :attribute deve ser preenchido',
            'email.required'=> 'O campo :attribute deve ser preenchido',
            'email.email' => 'O campo informado deve ser um email válido',
            'motivo_contatos_id.required' => 'O campo motivo de contato deve ser preenchido',
            'mensagem.required' => 'O campo :attribute deve ser preenchido',
            'mensagem.max' => 'O campo mensagem pode ter até 2 mil caracteres'
        ]
        
        );



        //Salvando dados
        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();

        
        return redirect()->route('site.index');
    }
}
