@extends('layouts.plantilla')
@section('title', 'Projects')
@section('content')
<h1>Este es el edit de project</h1>
<a href="{{ route('projects.show', $project->id) }}" class="">Volver</a>
<form action="{{ route('projects.update', $project->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">
        Name:
        <input type="text" name="name" value="{{ old('name', $project->name) }}">
    </label>
    <br>
    <label for="">
        Description:
        <input type="text" name="description" value="{{ old('name', $project->description) }}">
    </label>
    <br>
    <button type="submit">Update project</button>
</form>
@endsection
