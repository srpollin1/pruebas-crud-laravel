@extends('layouts.plantilla')
@section('title', 'Animales ' . $animal->name)
@section('content')
    <h1>Bienvenido a la pagina de: {{ $animal->name }} </h1>
    <a href="{{ route('animales.index') }}"> <- Volver a Animales</a>
            <br>
            <a href="{{ route('animales.edit', $animal) }}"> Editar Animal</a>
            <p><strong>Categoría: </strong>{{ $animal->category }}</p>
            <p><strong>Descripción: </strong>{{ $animal->description }}</p>

            <form action="{{ route('animales.destroy', $animal) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>
        @endsection
