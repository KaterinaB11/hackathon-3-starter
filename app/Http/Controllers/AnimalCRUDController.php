<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalCRUDController extends Controller
{
    //
    public function index() {
        // $animal = Animal::all();
        
    }

    public function create() {
        $animal = new Animal();

        return view("form", compact("animal"));
    }

    public function store(Request $request) {
        $this->validateAnimalCRUD($request);

        $animal = new Animal();
        $animal->name = $request->input("name");
        $animal->breed = $request->input("breed");
        $animal->age = $request->input("age");
        $animal->weight = $request->input("weight");

        session()->flash("success-message", 'Animal was successfully saved');

        return redirect()->route('animals.edit', $animal->id);
    }
}