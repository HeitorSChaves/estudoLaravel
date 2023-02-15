<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornece.com.br';
        $fornecedor->uf = 'MG';
        $fornecedor->email = 'fornecemuito@gmail.com';
        $fornecedor->save();

        // Utilizando um metodo
        Fornecedor::create([
            'nome'=>'Marcos',
            'site'=>'marcos.com.br',
            'uf'=>'CE',
            'email'=>'marcola@bol.com'
        ]);
    }
}
