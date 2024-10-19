@extends('layouts.retro')
@section('title', 'Movies'. $movie->name)
@section('content')
<div class="title">Bienvenido a la página: {{ $movie->name }}</div>
<a href="{{route('movies.index')}}">Return <--- </a>
<br>
<a href="{{route('movies.edit', $movie)}}">Edit movie <---</a>
<p class="nes-text is-primary mb-6">{{ $movie->name }}</p>
<p class="nes-text is-primary mb-6">{{ $movie->description }}</p>
<form action="{{ route('movies.destroy', $movie) }}" method="POST" class="mt-6">
    @csrf
    @method('delete')
    <button type="submit" class="nes-btn is-error">
        Delete
    </button>
</form>
@endsection
