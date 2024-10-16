@extends('layouts.plantilla')
@section('title', 'Songs')
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
        <a href="/" class="mb-4 text-blue-500 hover:text-blue-700">Volver a Inicio</a>
        <h1 class="text-3xl font-bold mb-6">Bienvenido a la página de canciones</h1>
        
        <a href="{{ route('songs.create') }}" class="mb-4 inline-block px-6 py-2 text-white bg-green-500 hover:bg-green-600 rounded-lg transition duration-300">
            Crear Canción
        </a>

        <div class="mt-6">
            {{ $songs->links() }}
        </div>
        
        <ul class="w-full max-w-md space-y-4">
            @foreach ($songs as $song)
                <li class="border border-gray-300 rounded-lg p-4 bg-white shadow hover:shadow-lg transition-shadow duration-300">
                    <a href="{{ route('songs.show', $song->id) }}" class="text-blue-600 hover:text-blue-800">
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
