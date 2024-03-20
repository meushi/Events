<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(Event $event)
    {
        return view('events.index')->with(['events' => $event->get()]);
    }
    
    public function show(Event $event)
    {
        return view('events.show')->with(['event' => $event]);
    }
}