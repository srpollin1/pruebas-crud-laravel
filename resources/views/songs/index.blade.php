@extends('layouts.retro')

@section('title', 'Songs')

@section('content')
    <div class="nes-container is-dark with-title">
        <div class="title">Bienvenido a la página de canciones </div>        
        <a href="/" class="nes-btn is-primary mb-4">Volver a Inicio</a>
        <a href="{{ route('songs.create') }}" class="nes-btn is-success mb-4">Crear Canción</a>

        {{-- <div class="mt-6">
            {{ $songs->links() }}
        </div> --}}
        
        <ul class="nes-list is-disc">
            @foreach ($songs as $song)
                <li>
                    <a href="{{ route('songs.show', $song->id) }}" class="nes-text is-primary">
                        {{ $song->name }}
                    </a>
                </li>
            @endforeach
        </ul>
        
        <div class="mt-6">
            {{ $songs->links() }}
        </div>
    </div>
@endsection
