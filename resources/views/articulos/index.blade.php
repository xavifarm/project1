@extends('layout')

@section('content')
    <h1>Lista de Artículos </h1>
    @foreach ($articulos as $articulo)
        {{$articulo}}<br>
    @endforeach
@endsection
