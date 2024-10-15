<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimal;
use Illuminate\Http\Request;
use App\Models\Animal;

use function Laravel\Prompts\alert;

class AnimalController extends Controller
{
    public function index()
    {
        $animales = Animal::orderBy('id', 'desc')->paginate();

        return view('animales.index', compact('animales'));
    }

    public function create()
    {
        return view('animales.create');
    }

    public function store(StoreAnimal $request)
    {
        $animal = Animal::create($request->all());

        return redirect()->route('animales.show', $animal->id);
    }

    public function show(Animal $animal)
    {
        return view('animales.show', compact('animal'));
    }

    public function edit(Animal $animal)
    {
        return view('animales.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal)
    {

        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'category' => 'required',
        ], [
            'description.required' => 'La descripción es requerida',
        ], [
            'name' => 'nombre animal',
        ]);

        $animal->update($request->all());
        return redirect()->route('animales.show', $animal->id);
    }

    public function destroy(Animal $animal)
    {
        // return alert('¿seguro que quieres eliminar?');
        $animal->delete();
        return redirect()->route('animales.index');
    }
}
