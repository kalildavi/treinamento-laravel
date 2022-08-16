@extends('layout.principal')
@section('conteudo')
    <h2>Listagem de cidades <a href="{{route('cidade.formulario')}}">nova cidade</a></h2>
    <table>
            @foreach ($cidades as $c)
            <tr>
                <td>{{$c->nome}}</td>
                <td><a href="{{route('cidade.formulario.edit',['id'=>$c->id])}}">editar</a></td>
            </tr>
            @endforeach
        </table>
@endsection
