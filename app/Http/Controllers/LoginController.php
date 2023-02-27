<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index (Request $request) {

        $erro = '';
        if($request->get('erro') == 1) {
            $erro = 'Usuário e ou senha não existe.';
        }

        if($request->get('erro') == 2) {
            $erro = 'Necessário realizar login para ter acesso a página.';
        }

        return view ('site.login', ['titulo' => 'login','erro'=>$erro]);
    }

    public function autenticar (Request $request) {
        
        //Regras de validação

        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //Mensagens do Feedback de validação

        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);

        //Recuperando parametros em variáveis.

        $email = $request->get('usuario');
        $password = $request->get('senha');

        //Inicial o Model User

        $user = new User();

        $usuario= $user->where('email', $email)
                ->where('password', $password)
                ->get()
                ->first();
        if(isset($usuario->name)){

            session_start();
            $_SESSION['nome'] =  $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login',['erro'=>1]);
        }

    }

    public function sair () {
        session_destroy();
        return redirect()->route('site.index');
    }

}
