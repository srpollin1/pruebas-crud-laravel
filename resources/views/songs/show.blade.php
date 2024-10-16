@extends('layouts.plantilla')
@section('title', 'Edit Song: ' . $song->name)
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
        <a href="{{ route('songs.index') }}" class="mb-4 text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out">Volver a canciones</a>
        
        <h1 class="text-3xl font-bold mb-6">Bienvenido a la página: {{ $song->name }}</h1>
        
        <a href="{{ route('songs.edit', $song) }}" class="mb-4 inline-block px-6 py-2 text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg transition duration-300 ease-in-out">
            Editar canción
        </a>

        <p class="text-lg text-gray-700 mb-6">{{ $song->name }}</p>

        <form action="{{ route('songs.destroy', $song) }}" method="POST" class="mt-6">
            @csrf
            @method('delete')
            <button type="submit" class="inline-block px-6 py-2 text-white bg-red-500 hover:bg-red-600 rounded-lg transition duration-300 ease-in-out">
                Eliminar
            </button>
        </form>
    </div>
@endsection
