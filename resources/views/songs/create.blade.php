@extends('layouts.retro')

@section('title', 'Create Song')

@section('content')
    <div class="nes-container is-dark with-title flex-container">
        <div class="title">Crear Canción</div>

        <a href="{{ route('songs.index') }}" class="nes-btn is-primary mb-4">Volver a Canciones</a>

        <form action="{{ route('songs.store') }}" method="POST" class="nes-container is-light p-6 rounded-lg w-full max-w-md">
            @csrf

            <div class="mb-4">
                <label for="name" class="nes-text is-primary">Nombre de la Canción:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="nes-input is-success mt-1" required placeholder="Ingrese el nombre de la canción">
            </div>

            <button type="submit" class="nes-btn is-success w-full">
                Crear
            </button>
        </form>
    </div>
@endsection
