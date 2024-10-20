@extends('layouts.plantilla')
@section('title', 'Projects'. $project->name)
@section('content')
<div class="title">Bienvenido a la página: {{ $project->name }}</div>
<a href="{{route('projects.index')}}">Return <--- </a>
<br>
<a href="{{route('projects.edit', $project)}}">Edit game <---</a>
<p class="nes-text is-primary mb-6">{{ $project->name }}</p>
<p class="nes-text is-primary mb-6">{{ $project->description }}</p>
<form action="{{ route('projects.destroy', $project) }}" method="POST" class="mt-6">
    @csrf
    @method('delete')
    <button type="submit" class="nes-btn is-error">
        Delete
    </button>
</form>
@endsection
