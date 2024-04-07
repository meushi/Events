<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Performer;

class PerformerController extends Controller
{
    public function index(Performer $performer)
    {
        return view('performers.index')->with(['posts' => $performer->getPaginateByPerformer()]);
    }
    
    public function show(Performer $performer)
    {
        return view('performers.show')->with(['performers' => $performer]);
    }
}