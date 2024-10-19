<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieStore;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->paginate();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        
        return view('movies.create');
    }

    public function store(MovieStore $request)
    {
        $movie = Movie::create($request->all());
        return redirect()->route('movies.show', $movie->id);
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());
        return redirect()->route('movies.show', $movie->id);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
