
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
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
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop