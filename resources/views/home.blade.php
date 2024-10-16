@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <h1 class="text-3xl font-bold mb-6">Bienvenido a la página principal</h1>
        <div class="space-y-4">
            <a href="{{ route('animales.index') }}" class="inline-block px-6 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-300">
                Animales CRUD
            </a>
            <a href="{{ route('products.index') }}" class="inline-block px-6 py-2 text-white bg-green-500 hover:bg-green-600 rounded-lg transition duration-300">
                Products CRUD
            </a>
            <a href="{{ route('songs.index') }}" class="inline-block px-6 py-2 text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg transition duration-300">
                Songs CRUD
            </a>
        </div>
    </div>
@endsection
