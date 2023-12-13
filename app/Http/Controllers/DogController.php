<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dogs = Dog::all();
        return view('dogs.index', compact('dogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'breed' => 'required|max:255',
            'age' => 'required|integer',
        ]);

        Dog::create($validatedData);

        return redirect()->route('dogs.index')->with('success', 'Dog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dog = Dog::findOrFail($id);
        return view('dogs.show', compact('dog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dog = Dog::findOrFail($id);
        return view('dogs.edit', compact('dog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'breed' => 'required',
            'age' => 'required|integer',
        ]);

        $dog = Dog::findOrFail($id);
        $dog->update($validatedData);

        return redirect()->route('dogs.index')->with('success', 'Dog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();

        return redirect()->route('dogs.index')->with('success', 'Dog deleted successfully.');
    }
}
