@extends('layout.principal')
@section('conteudo')
@if(empty($cidade))
    <form action="{{route('cidade.insere')}}" method="POST">
@else
    <form action="{{route('cidade.edicao',['id'=>$cidade->id])}}" method="POST">
@endif
    @csrf
    <label>Cidade</label>
    <input type="text" name="nome" maxlength="150" @isset($cidade) value="{{$cidade->nome}}" @endisset>
    <br/>
    @if(empty($cidade))
    <button type="submit">Salvar</button>
    @else
    <button type="submit">Editar</button>
    <a href="{{route('cidade.lista')}}">Cancelar</a>
    @endif
</form>
@if(!empty($cidade))
    <form action="{{route('cidade.exclusao',['id'=>$cidade->id])}}" method="POST">
        @csrf
        <button type="submit">Excluir</button>
    </form>
@endif 
@endsection