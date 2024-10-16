@extends('layouts.plantilla')
@section('title', 'Edit Song')
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
        <a href="{{ route('songs.show', $song->id) }}" class="mb-4 text-blue-500 hover:text-blue-700">Volver</a>
        
        <h1 class="text-3xl font-bold mb-6">Editar Canción</h1>

        <form action="{{ route('songs.update', $song->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nombre de la Canción:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $song->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <button type="submit" class="w-full px-6 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-300">
                Guardar Cambios
            </button>
        </form>
    </div>
@endsection
