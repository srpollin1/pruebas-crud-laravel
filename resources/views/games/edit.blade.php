@extends('layouts.plantilla')
@section('title', 'Games')
@section('content')
    <h1>Este es el edit de games</h1>
    <a href="{{ route('games.show', $game->id) }}" class="">Volver</a>
    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">
            Name:
            <input type="text" name="name" value="{{ old('name', $game->name) }}">
        </label>
        <br>
        <label for="">
            Category:
            <input type="text" name="category" value="{{ old('name', $game->category) }}">
        </label>
        <br>
        <button type="submit">Update game</button>
    </form>
@endsection
