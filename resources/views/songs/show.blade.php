@extends('layouts.retro')

@section('title', 'Edit Song: ' . $song->name)

@section('content')
    <div class="nes-container is-dark with-title flex-container">
        <div class="title">Bienvenido a la página: {{ $song->name }}</div>
        
        <a href="{{ route('songs.index') }}" class="nes-btn is-primary mb-4">Volver a canciones</a>

        <a href="{{ route('songs.edit', $song) }}" class="nes-btn is-warning mb-4">
            Editar canción
        </a>

        <p class="nes-text is-primary mb-6">{{ $song->name }}</p>

        <form action="{{ route('songs.destroy', $song) }}" method="POST" class="mt-6">
            @csrf
            @method('delete')
            <button type="submit" class="nes-btn is-error">
                Eliminar
            </button>
        </form>
    </div>
@endsection
