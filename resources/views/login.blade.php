<!DOCTYPE html>
<html>

<head>
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="pagina">
        <div class="login-form">
            <div class="form-titulo ">Autenticação</div>
            @if($errors)
            <div class="flash-error">{{$errors->first('login')}}</div>
            @endif
            <form method='post' action="{{route('login')}}">
                @csrf
                <input id="name" type='text' name='name' placeholder="Digite seu nome de usuário" value="{{old('name')}}">
                <input id="password" type='password' name='password' placeholder="Digite sua senha">
                <button type='submit'>Login</button>
                <a href="#">Esqueci a senha</a>
            </form>

        </div>


    </div>
</body>

</html>