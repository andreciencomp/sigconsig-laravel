<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
</head>

<body>
    <div class="topo">
        <nav class="menu-principal">
            <ul>
                <li>
                    <a>Clientes</a>
                    <ul class="menu">
                        <li>Cadastrar</li>
                        <li>Listar</li>
                    </ul>
                </li>
                <li><a>Contratos</a></li>
                <li><a>Corretores</a></li>
                <li><a>Produtos</a></li>
                <li>
                    <a>Bancos</a>
                    <ul class="menu">
                        <li><a href="{{route('bancos.create')}}">Cadastrar</a></li>
                        <li>Listar</li>
                    </ul>
                </li>
                <li><a>Comissionamentos</a></li>
            </ul>
        </nav>
        @if(Auth::check())
        <a href="{{route('logout')}}">logout</a>
        @endif
    </div>
    @yield('conteudo')
</body>

</html>