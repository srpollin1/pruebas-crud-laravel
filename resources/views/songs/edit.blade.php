@extends('layouts.retro')

@section('title', 'Edit Song')

@section('content')
    <div class="nes-container is-dark with-title flex-container">
        <div class="title">Editar Canción</div>
        
        <a href="{{ route('songs.show', $song->id) }}" class="nes-btn is-primary mb-4">Volver</a>

        <form action="{{ route('songs.update', $song->id) }}" method="POST" class="nes-container is-light p-6 rounded-lg w-full max-w-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="nes-text is-primary">Nombre de la Canción:</label>
                <div class="nes-field is-inline">
                    <input type="text" name="name" id="name" value="{{ old('name', $song->name) }}" class="nes-input is-warning mt-1" required placeholder="Ingrese el nombre de la canción">
                </div>
            </div>

            <button type="submit" class="nes-btn is-success w-full">
                Guardar Cambios
            </button>
        </form>
    </div>
@endsection
