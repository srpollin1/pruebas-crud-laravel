@extends('layouts.retro')
@section('title', 'Games'. $game->name)
@section('content')
<div class="title">Bienvenido a la página: {{ $game->name }}</div>
<a href="{{route('games.index')}}">Return <--- </a>
<br>
<a href="{{route('games.edit', $game)}}">Edit game <---</a>
<p class="nes-text is-primary mb-6">{{ $game->name }}</p>
<p class="nes-text is-primary mb-6">{{ $game->description }}</p>
<form action="{{ route('games.destroy', $game) }}" method="POST" class="mt-6">
    @csrf
    @method('delete')
    <button type="submit" class="nes-btn is-error">
        Delete
    </button>
</form>
@endsection
