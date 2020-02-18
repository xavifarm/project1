@extends('layout')

@section('title', "pastel #{$id}")

@section('content')
    <h1>Pastel #{{ $id }} </h1>
    Mostrando el detalle del pastel {{$id}}
@endsection