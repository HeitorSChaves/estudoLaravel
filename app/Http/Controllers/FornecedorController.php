<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' =>'Fornecedor 1',
                'status' => 'S',
                'cnpj' => '111.111.111/11',
                'ddd' => '12',
                'telefone' => '997055051'
            ],
            1 => [
                'nome' =>'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '470.570.918/77',
                'ddd' => '12',
                'telefone' => '41410939'
            ],
            2 => [
                'nome' =>'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '000.000.000-00',
                'ddd' => '12',
                'telefone' => '996233693'
              ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
