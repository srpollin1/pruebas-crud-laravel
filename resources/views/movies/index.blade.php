@extends('layouts.retro')
@section('title', 'Movies')
@section('content')
    <h1>Este es el index de movies</h1>

    <a href="{{route('movies.create')}}">Create movie</a>

    <ul>
        @foreach ($movies as $movie)
        <li>
            <a href="{{ route('movies.show', $movie->id) }}" class="nes-text is-primary">
                {{ $movie->name }}
            </a>
        </li>
        @endforeach
    </ul>
    
@endsection
