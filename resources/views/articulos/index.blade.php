@extends('layout')

@section('content')
    <h1>Lista de Artículos </h1>
    @foreach ($articulos as $articulo)
        <strong>{{$articulo->titulo}}</strong><br>
        <p>Autor: {{$articulo->autor}}</p>
        <p>Receta: {{$articulo->descripcion}}</p><hr>
    @endforeach
@endsection
