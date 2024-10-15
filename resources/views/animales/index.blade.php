@extends('layouts.plantilla')
@section('title', 'Animales')
@section('content')
    <a href="/">Volver al Home</a>
    <h1>Bienvenido a la pagina animales</h1>
    <a href="{{ route('animales.create') }}">Crear Animal</a>
    <ul>
        @foreach ($animales as $animal)
            <li>
                <a href="{{ route('animales.show', $animal->id) }}">{{ $animal->name }}</a>
            </li>
        @endforeach
    </ul>
    {{ $animales->links() }}
@endsection
