<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="topo">
            <nav class = "menu-principal">
                <ul>
                    <li><span class = "menu-head">Clientes</span>
                        <ul class="menu">
                            <li>Cadastrar</li>
                            <li>Listar</li>
                        </ul>
                    </li>
                    <li><span class = "menu-head">Contratos</span></li>
                    <li><span class = "menu-head">Corretores</span></li>
                    <li><span class = "menu-head">Produtos</span></li>
                    <li><span class = "menu-head">Bancos</span></li>
                    <li><span class = "menu-head">Comissionamentos</a></li>
                </ul>
            </nav>
            @if(Auth::check())
            <a href="{{route('logout')}}">logout</a>
            @endif
        </div>
        @yield('conteudo')
    </body>
</html>