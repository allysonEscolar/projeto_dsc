@extends('app')

@section('conteudo')
<table class="table table-striped">
    <tr>
        <th>
            NOME
        </th>
        <th>
            IDADE
        </th>
    </tr>
    @foreach($objetos as $objeto)
    <tr>
        <td> {{$objeto['nome']}} </td>
        <td> {{$objeto['idade']}} </td>
    </tr>
    @endforeach
</table>
@endsection