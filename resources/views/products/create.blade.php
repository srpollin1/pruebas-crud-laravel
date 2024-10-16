@extends('layouts.plantilla')
@section('title', 'Create Product')
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
        <a href="{{ route('products.index') }}" class="mb-4 text-blue-500 hover:text-blue-700">Volver a Productos</a>
        
        <h1 class="text-3xl font-bold mb-6">Crear Producto</h1>

        <form action="{{ route('products.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nombre:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Precio:</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mb-4">
                <label for="stock" class="block text-gray-700">Stock:</label>
                <input type="number" name="stock" id="stock" value="{{ old('stock') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <button type="submit" class="w-full px-6 py-2 text-white bg-green-500 hover:bg-green-600 rounded-lg transition duration-300">
                Crear
            </button>
        </form>
    </div>
@endsection
