<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

        <span>{{Auth::user()->name}}<span>
        @if(in_array(Auth::user()->tipoUsuario->tipo,['cadastro']))
        <h1>Administrador</h1>
        @endif

        <h1>Esta é a pagina admin</h1>
    </body>
</html>