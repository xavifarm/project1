@extends('layout')
    <!--***************************************************************
    <h1><php e($title) ?></h1>
    <hr>
        <ul>
            esto sustituye la siguiente linea comentada asignando blade
            <php foreach($users as $user):?>
                <li><php e($user)?></li>
                También se puede hacer así añadiendo blade
                y lo único que hacemos para que laravel lo haga
                funcionar será editar el nombre del archivo para 
                que ahora quede users.php => users.blade.php
                <li><php e($user) ?></li>
            sustituimos la siguiente linea así asignando blade
            <php endforeach; ?>
        </ul>
    {{--@else 
        <p>No hay usuarios registrados</p>
    @endif--}}
    *************************************************************** -->
@section('title', "Listado de usuarios")

@section('content')
<h1>{{ $title }} </h1>
<ul>
    @forelse ($users as $user)
        <li>{{ $user }}</li>
    @empty
        <p>No hay usuarios registrados</p>
    @endforelse
</ul>
@endsection
@section('sidebar')
    <h2>Barra Lateral personalizada</h2>
@endsection
