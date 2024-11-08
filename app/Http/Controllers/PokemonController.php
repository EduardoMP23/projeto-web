<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::all();
        return view('pokemon/index', compact('pokemon'));
    }
    
    public function create()
    {
        return view('pokemon/create');
    }
    
    public function store(Request $request)
    {
        Pokemon::create($request->all());
        return redirect('pokemon')->with('success', 'Product created successfully.');
    }
    
    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemon/edit', compact('pokemon'));
    }
    
    public function update(Request $request, $id)
    {
        $product = Pokemon::findOrFail($id);
        $product->update($request->all());
        return redirect('pokemon')->with('success', 'Product updated successfully.');
    }
    
    public function destroy($id)
    {
        $product = Pokemon::findOrFail($id);
        $product->delete();
        return redirect('pokemon')->with('success', 'Product deleted successfully.');
    }
}
