@extends('layouts.mainlayout')
@section('conteudo')
@if($errors->has('erro'))
<h5 style="color:red; font-family:arial">{{$errors->first('erro')}}</h5>
@endif

<h1>{{session()->get('mensagem')}}</h1>


<form method='POST' action='\bancos' >
    @csrf
    <input name="codigo" type="text" placeholder="código">
    <input name = "sigla" type="text" placeholder="sigla">
    <input name="nome" type="text" placeholder="nome">
    <input type="submit" value="Cadastrar">
</form>



@endsection