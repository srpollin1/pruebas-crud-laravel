@extends('layouts.plantilla')
@section('title', 'Projects')
@section('content')
<h1>Este es el create</h1>
<form action="{{route('projects.store')}}" method="POST">
    @csrf
    <label for="">
        Name:
        <input type="text" name="name">
    </label>
    <br>
    <label for="">
        Description:
        <input type="text" name="description">
    </label>
    <br>
    <button type="submit">Create project</button>
</form>
@endsection
