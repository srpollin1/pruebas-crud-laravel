@extends('layouts.plantilla')
@section('title', 'Games')
@section('content')
    <h1>Este es el index de games</h1>

    <a href="{{route('games.create')}}">Create games</a>

    <ul>
        @foreach ($games as $game)
        <li>
            <a href="{{ route('games.show', $game->id) }}" class="nes-text is-primary">
                {{ $game->name }}
            </a>
        </li>
        @endforeach
    </ul>
    
@endsection
