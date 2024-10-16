@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>
    <a href="{{ route('animales.index') }}">Animales CRUD</a>
    <br>
    <br>
    <a href="{{ route('products.index') }}">Productos CRUD</a>
    <br>
    <br>
@endsection
