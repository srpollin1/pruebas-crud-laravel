@extends('layouts.plantilla')
@section('title', 'Projects')
@section('content')
    <h1>Este es el index</h1>
    <a href="{{ route('projects.create') }}">Create project +</a>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="{{ route('projects.show', $project->id) }}" class="nes-text is-primary">
                    {{ $project->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
