@extends('layout')

@section('content')
    <h1>Lista de pasteles </h1>
    @foreach ($pasteles as $pastel)
        {{$pastel}}<br>
    @endforeach
@endsection

