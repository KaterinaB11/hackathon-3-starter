<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Owner;


class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::select('id', 'image_id', 'owner_id', 'name', 'breed', 'age', 'weight')->orderBy('name')->get();

        $animals = Animal::with('owner', 'image') // Eager load owner and image relationships if needed
            ->orderBy('name')
            ->paginate(30); // Specify the number of items to display per page

        return view('animals/animals', compact('animals'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $animals = Animal::where('name', 'like', '%'.$query.'%')->get();
        $owners = Owner::where('first_name', 'like', '%'.$query.'%')->orWhere('surname', 'like', '%'.$query.'%')->get();
        
        return view('search.results', compact('animals', 'owners'));
    }
    
}