@extends("layouts.mainlayout")
@section("conteudo")

<h1>Main area</h1>
<a href="{{route('login')}}">Login</a>
<a href="{{route('admin-area')}}">Admin area</a>
@endsection