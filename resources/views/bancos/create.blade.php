@extends('layouts.mainlayout')
@section('conteudo')
@if($errors->has('erro'))
<h5 style="color:red; font-family:arial">{{$errors->first('erro')}}</h5>
@endif
<link href="{{asset('css/bancos.css')}}" rel="stylesheet">

<div class="container">
    <h1 class="titulo">Cadastro de banco</h1>

    <form method='POST' action='\bancos'>
        @method('POST')
        @csrf
        @if(session('mensagem') || $errors->has('erro_cadastro'))
        <div id="mensagemFeedback" class="{{ $errors->has('erro_cadastro') ? 'feedback-color-erro' : 'feedback-color-sucesso'}} feedback-mensagem">
            <small>
                @if(session('mensagem'))
                {{session('mensagem')}}
                @elseif($errors->any())
                {{$errors->first()}}
                @endif
            </small>
            <div class="botao-fechar" onclick="closeFeedbackMensagem()">X</div>
        </div>
        @endif
        <div class="form-group">
            <label for="codigo">Código do banco</label>
            <input name="codigo" type="text" placeholder="código" value="{{old('codigo')}}">
            @error('codigo')
            <small>{{$errors->get('codigo')[0]}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="sigla">Sigla do banco</label>
            <input name="sigla" type="text" placeholder="sigla" value="{{old('sigla')}}">
            @error('sigla')
            <small>{{$errors->get('sigla')[0]}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="nome">Nome do banco</label>
            <input name="nome" type="text" placeholder="nome" value="{{old('nome')}}">
            @error('nome')
            <small>{{$errors->get('nome')[0]}}</small>
            @enderror
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</div>

<script>
    function msgPreenchimento(event) {
        event.target.setCustomValidity("Preencimento obrigatório");
    }

    function closeFeedbackMensagem() {
        document.querySelector('#mensagemFeedback').classList.toggle('feedback-mensagem-invisivel');
    }
</script>



@endsection