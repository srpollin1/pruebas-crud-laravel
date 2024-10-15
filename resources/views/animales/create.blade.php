@extends('layouts.plantilla')
@section('title', 'Animales create')
@section('content')
    <h1>Podras crear un animal</h1>
    <a href="{{ route('animales.index') }}"> <- Volver a Animales</a>
    <form action="{{ route('animales.store') }}" method="POST">

        {{-- Generar Token --}}
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            {{ $message }}
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>
        @error('description')
            {{ $message }}
        @enderror

        <br>
        <label>
            <br>
            categoría:
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
