@extends('layouts.retro')
@section('title', 'Movies')
@section('content')
<h1>Este es el edit de movies</h1>
<a href="{{ route('movies.show', $movie->id) }}" class="">Volver</a>
<form action="{{route('movies.update', $movie->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">
        Name:
        <input type="text" name="name" value="{{ old('name', $movie->name) }}">
    </label>
    <br>
    <label for="">
        Description:
        <input type="text" name="description" value="{{ old('name', $movie->description) }}">
    </label>
    <br>
    <button type="submit">Update movie</button>
</form>
@endsection
