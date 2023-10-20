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

        $animals = Animal::with('owner', 'image') 
            ->orderBy('name')
            ->paginate(30); // Specify the number of items to display per page

        return view('animals/animals', compact('animals'));
    }

//     public function search(Request $request)
// {
//     $query = $request->input('query');
    
//     // Search for animals with a name that matches the query
//     $animals = Animal::where('name', 'like', '%'.$query.'%')->paginate(10);

//     // Search for owners with first name or surname that match the query
//     $owners = Owner::where(function($queryBuilder) use ($query) {
//         $queryBuilder->where('first_name', 'like', '%'.$query.'%')
//                      ->orWhere('surname', 'like', '%'.$query.'%');
//     })->paginate(10);

//     return view('search.results', compact('animals', 'owners'));
// }
    
}