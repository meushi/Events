<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;

class VenueController extends Controller
{
    public function index(Venue $venue)
    {
        return view('venues.index')->with(['posts' => $venue->getByVenue()]);
    }
    
    public function show(Venue $venue)
    {
        return view('venues.show')->with(['venues' => $venue]);
    }
}