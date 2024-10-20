@extends('layouts.retro')
@section('title', 'Games')
@section('content')
<h1>Este es el create de games</h1>
<form action="{{route('games.store')}}" method="POST">
    @csrf
    <label for="">
        Name:
        <input type="text" name="name">
    </label>
    <br>
    <label for="">
        Category:
        <input type="text" name="category">
    </label>
    <br>
    <button type="submit">Create game</button>
</form>
@endsection
