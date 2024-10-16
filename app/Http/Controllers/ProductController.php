<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        return view('products.store');
    }

    public function show()
    {
        return view('products.show');
    }

    public function edit()
    {
        return view('products.edit');
    }

    public function update()
    {
        return view('products.update');
    }

    public function destroy()
    {
        return view('products.destroy');
    }
}
