<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function show(Owner $owner)
    {
        return view('owners.show', compact('owner'));
    }
}
