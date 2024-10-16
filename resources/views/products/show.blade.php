@extends('layouts.plantilla')
@section('title', 'Edit Product: ' . $product->name)
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
        <a href="{{ route('products.index') }}" class="mb-4 text-blue-500 hover:text-blue-700">Volver a Productos</a>
        
        <h1 class="text-3xl font-bold mb-6">Bienvenido a la página: {{ $product->name }}</h1>
        
        <a href="{{ route('products.edit', $product) }}" class="mb-4 inline-block px-6 py-2 text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg transition duration-300">
            Editar Producto
        </a>

        <p class="text-lg font-semibold"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
        <p class="text-lg font-semibold"><strong>Stock:</strong> {{ $product->stock }}</p>

        <form action="{{ route('products.destroy', $product) }}" method="POST" class="mt-6">
            @csrf
            @method('delete')
            <button type="submit" class="inline-block px-6 py-2 text-white bg-red-500 hover:bg-red-600 rounded-lg transition duration-300">
                Eliminar
            </button>
        </form>
    </div>
@endsection
