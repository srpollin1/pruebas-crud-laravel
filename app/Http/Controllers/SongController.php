<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongStore;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::orderBy('id', 'desc')->paginate();
        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store(SongStore $request)
    {
        $song = Song::create($request->all());

        return redirect()->route('songs.show', $song->id);
    }

    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    public function update(Request $request, Song $song)
    {
        $song->update($request->all());
        return redirect()->route('songs.show', $song->id);
    }

    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index');
    }
}
