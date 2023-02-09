<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' =>'Heitor',
                'status' => 'S',
                'cnpj' => '111.111.111/11',
                'ddd' => '12',
                'telefone' => '997055051'
            ],
            1 => [
                'nome' =>'Pedro',
                'status' => 'S',
                'cnpj' => '470.570.918/77',
                'ddd' => '12',
                'telefone' => '41410939'
            ],
            2 => [
                'nome' =>'José',
                'status' => 'S',
                'cnpj' => '000.000.000-00',
                'ddd' => '12',
                'telefone' => '996233693'
            ],
            3 => [
                'nome' => 'Rafael',
                'status' => 'S',
                'cnpj' => '145.768.435.23',
                'ddd' => '11',
                'telefone' => '981521650'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
