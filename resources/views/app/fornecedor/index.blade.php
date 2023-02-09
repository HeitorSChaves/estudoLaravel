<h3> Fornecedor </h3>

@php
    /*

    */

@endphp


{{-- @unless executa caso o retorno seja false, é o mesmo de if com ! --}}

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? 'Não foi preenchido'}}
        <br>
        Telefone: ({{$fornecedor['ddd']?? ''}}) {{$fornecedor['telefone']??''}}
        <hr>
    @empty
        Não existem fornecedores cadastrados.
    @endforelse
@endisset

