<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href ="{{asset('css/estilo_basico.css')}}">
    </head>

    <body>
        @include('site.layouts._partials.topo') <!-- Inclui o cabeçalho que se tornou um include, no arquivo topo.blade.php -->
        @yield('conteudo')
        @yield('conteudo.principal')
        @yield ('conteudo.contato')
    </body>
</html>