@extends('layouts.retro')
@section('title', 'Movies')
@section('content')
<h1>Este es el create de movies</h1>
<form action="{{route('movies.store')}}" method="POST">
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
    <button type="submit">Create movie</button>
</form>
@endsection
