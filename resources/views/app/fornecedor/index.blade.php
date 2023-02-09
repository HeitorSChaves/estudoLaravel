<h3> Fornecedor </h3>

@php
    /*

    */

@endphp


{{-- @unless executa caso o retorno seja false, é o mesmo de if com ! --}}


    @forelse ($fornecedores as $indice => $fornecedor)
        {{$loop->iteration}}.
        <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? 'Não foi preenchido'}}
        <br>
        Telefone: ({{$fornecedor['ddd']?? ''}}) {{$fornecedor['telefone']??''}}
        <br>

        @if ($loop->first)
            1º Fornecedor
        @endif
        @if ($loop->last)
            Ultimo Fornecedor
            <br>
            <br>
            Total de registros: {{$loop->count}}
        @endif
        <hr>
        @empty
        Não existem fornecedores cadastrados.
    @endforelse
