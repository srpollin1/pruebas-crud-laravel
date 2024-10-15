@extends('layouts.plantilla')
@section('title', 'Animales edit')
@section('content')
    <h1>Podras editar un animal</h1>
    <a href="{{ route('animales.index') }}"> <- Volver a Animales</a>
    <form action="{{ route('animales.update', $animal) }}" method="post">

        @csrf

        @method('put')
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $animal->name) }}">
        </label>
        @error('name')
            {{ $message }}
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{ old('description', $animal->description) }}</textarea>
        </label>
        @error('description')
            {{ $message }}
        @enderror

        <br>
        <label>
            <br>
            categoría:
            <input type="text" name="category" value="{{ old('category', $animal->category) }}">
        </label>
        @error('category')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
